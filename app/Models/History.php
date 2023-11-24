<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    protected $table = 'history';

    protected $fillable = [
        'music_id',
        'played_at',
        'played_day',
        'user_id'
    ];

    // public static function findHistory($id)
    // {

    //      $groupedHistoryData = History::select(DB::raw('DATE(played_at) as date'), 'played_day', 'music_id')
    //         ->orderBy('date', 'desc')
    //         ->orderBy('played_day', 'desc')
    //         ->get()
    //         ->groupBy('date');

    //     return $groupedHistoryData;
    // }

    //  public static function findHistory($userId)
    // {
    //     $groupedHistoryData = History::select(DB::raw('DATE(played_at) as date'), 'played_day', 'music_id')
    //         ->where('user_id', $userId)
    //         ->orderBy('date', 'desc')
    //         ->orderBy('played_day', 'desc')
    //         ->get()
    //         ->groupBy('date');

    //     return $groupedHistoryData;
    // }
}

    
