<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newgenre extends Model
{
    use HasFactory;

    protected $table = 'newgenres';
    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];
    protected $fillable = ['new_genre'];
}
