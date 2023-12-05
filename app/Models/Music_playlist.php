<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Music_playlist extends Model
{
    use HasFactory;
    protected $table = 'music_playlist';

    protected $guarded = [
        'id'
    ];

    protected $fillable = [
        'playlist_id',
        'music_id'
    ];
}
