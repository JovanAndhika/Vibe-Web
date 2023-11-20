<?php

namespace App\Http\Controllers\User;

use App\Models\Music;
use App\Models\Playlist;
use Illuminate\Http\Request;
use App\Models\PlaylistEntities;
use App\Http\Controllers\Controller;

class PlaylistController extends Controller
{
    public function getAllMusics()
    {
        // jika ada request search
        $musics = collect([]);
        if (request()->filled('search')) {
            // cari data music berdasarkan judul
            $musics = Music::where('title', 'LIKE', "%" . request('search') . "%")
                ->orWhere('artist', 'LIKE', "%" . request('search') . "%")
                ->get();
        }
        return $musics->toArray();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.library', [
            "title" => "library",
            "active" => "library",
            "playlists" => Playlist::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'playlist_name' => 'required|string|max:255',
            'selected_songs' => 'required|string'
        ]);

        // fetch data
        $playlistName = $request->input('playlist_name');
        $selectedSongs = json_decode($request->input('selected_songs'), true);

        // create playlist
        $playlist = Playlist::create([
            'name' => $playlistName,
            'user_id' => auth()->user()->id
        ]);

        foreach ($selectedSongs as $songId) {
            PlaylistEntities::create([
                'playlist_id' => $playlist->id,
                'music_id' => $songId,
            ]);
        }

        return redirect()->back()->with('success', 'Playlist created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Playlist $playlist)
    {
        return $playlist->load('playlistEntities.music');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Playlist $playlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Playlist $playlist)
    {
        // Validate
        $request->validate([
            'playlist_name' => 'required|string|max:255',
            'selected_songs' => 'required|string'
        ]);
        
        // Fetch data
        $playlistName = $request->input('playlist_name');
        $selectedSongs = json_decode($request->input('selected_songs'), true);

        // Update playlist
        $playlist->update([
            'name' => $playlistName,
        ]);

        // Sync selected songs
        $playlist->musics()->sync($selectedSongs);

        return redirect()->back()->with('success', 'Playlist updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Playlist $playlist)
    {
        $playlist->delete();
        return redirect()->back()->with('success', 'Playlist deleted successfully!');
    }
}
