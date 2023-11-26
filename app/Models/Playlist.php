<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    // Relation
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function playlistEntities()
    {
        return $this->hasMany(PlaylistEntities::class);
    }

    public function musics()
    {
        return $this->belongsToMany(Music::class, 'playlist_entities', 'playlist_id', 'music_id');
    }
}
