<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlaylistEntities extends Model
{
    use HasFactory;
    protected $table = 'playlist_entities'; 
    protected $guarded = ['created_at', 'updated_at'];
    protected $primaryKey = null;
    public $incrementing = false;
    public $timestamps = false;

    // Relation
    public function playlist()
    {
        return $this->belongsTo(Playlist::class);
    }

    public function music()
    {
        return $this->belongsTo(Music::class);
    }
}
