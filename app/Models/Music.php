<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'artist',
        'genre',
        'file_path',
        'release_date',
        'disc_category',
        'disc_number'
    ];

    // untuk filter search
    // memanggil dengan Music::filter()
    // parameter adalah request apa yang ingin di filter dimana itu berisi keywordnya
    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['artist'] ?? false, function ($query, $artist) {
            // jika ada request search, maka jalankan query ini
            return $query->where('artist', 'like', '%' . $artist . '%');
        });

        $query->when($filters['title'] ?? false, function ($query, $title) {
            // jika ada request search, maka jalankan query ini
            return $query->where('title', 'like', '%' . $title . '%');
        });

        // menambah filter jika diperlukan
    }
}
