<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Music;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Middleware\Admin;
use App\Models\Discovery;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    //Controller Admin
    public function index()
    {
        $musics = Music::all();
        return view('adminCRUD.adminHome', ['musics' => $musics]);
    }


    public function add_song()
    {
        return view('adminCRUD.addsong');
    }

    public function store_song(Request $request)
    {
        // validasi
        $data = $request->validate([
            'title' => 'required',
            'artist' => 'required',
            'genre' => 'required',
            'chfile' => 'required|file|max:25000',
            'release_date' => 'required'
        ]);

        if ($request->hasFile('chfile')) {
            $destinationPath = 'listofsongs';
            $files = $request->file('chfile'); // will get files
            $path = $files->store($destinationPath); // store files to destination folder
            $data['file_path'] = $path;
        }

        // insert to database
        Music::create($data);
        return back()->with('success', 'Song has been added');
    }


    public function edit_song(Music $music)
    {

        return view('adminCRUD.editsong', ['music' => $music]);
    }

    public function update_song(Music $music, Request $request)
    {
        // validasi
        $data = $request->validate([
            'title' => 'required',
            'artist' => 'required',
            'genre' => 'required',
            'release_date' => 'required'
        ]);

        if ($request->file('chfile')) {
            if ($request->oldsong) {
                $request->validate(['chfile' => 'required|file|max:25000']);
                Storage::delete($request->oldsong);
            }
            $destinationPath = 'listofsongs';
            $files = $request->file('chfile'); // will get files
            $path = $files->store($destinationPath); // store files to destination folder
            $data['file_path'] = $path;
        }

        $music->update($data);
        return redirect(route('admin.edit', ['music' => $music]))->with('success', 'edit confirmed');
    }


    public function destroy_song(Music $music)
    {
        if ($music->file_path) {
            Storage::delete($music->file_path);
        }

        Music::destroy($music->id);
        return redirect(route('admin.index', ['music' => $music]));
    }

    public function view_user()
    {
        $user = DB::table('users')
            ->where('is_admin', false)
            ->get();

        return view('adminCRUD.adminViewUser', ['users' => $user]);
    }


    public function view_admin()
    {
        $user = DB::table('users')
            ->where('is_admin', true)
            ->get();

        return view('adminCRUD.adminViewAdmin', ['users' => $user]);
    }

    public function deactivate_user(User $user)
    {

        $query = DB::table('users')
            ->where('is_admin', false)
            ->where('id', $user->id)
            ->update(['activation' => false]);

        return redirect(route('admin.viewuser', ['successdeactivate' => $query]));
    }

    public function deactivate_admin(User $user)
    {
        $query = DB::table('users')
            ->where('is_admin', true)
            ->where('id', $user->id)
            ->update(['activation' => false]);

        return redirect(route('admin.viewadmin', ['successdeactivate' => $query]));
    }

    public function reactivate_user(User $user)
    {

        $query = DB::table('users')
            ->where('is_admin', false)
            ->where('id', $user->id)
            ->update(['activation' => true]);

        return redirect(route('admin.viewuser', ['successdeactivate' => $query]));
    }

    public function reactivate_admin(User $user)
    {
        $query = DB::table('users')
            ->where('is_admin', true)
            ->where('id', $user->id)
            ->update(['activation' => true]);

        return redirect(route('admin.viewadmin', ['successdeactivate' => $query]));
    }

    public function discover()
    {
        $musics = Music::all();
        return view('adminCRUD.admindiscover', ['musics' => $musics]);
    }

    public function edit_discover(Music $music)
    {
        $discoveries = Discovery::all();

        return view('adminCRUD.editdiscover', ['music' => $music, 'discoveries' => $discoveries]);
    }


    public function update_discover(Request $request, Music $music)
    {
        $data = AdminController::getId($request->input('disc_category'));
        DB::table('music')
            ->where('id', $music->id)
            ->update(['category_id' => $data]);
        return back();
    }

    public static function getId($disc_category) { 
        return DB::table('discoveries')
        ->where('disc_category', $disc_category)
        ->value('id');
    }
}
