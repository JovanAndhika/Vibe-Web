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
        'user_id'
    ];


    public function music(){
        return $this->belongsTo(Music::class, 'music_id');
    }
} 

    
