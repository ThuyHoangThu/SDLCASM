<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    protected $table = "songs";

    protected $primaryKey ='id';

    protected $fillable = [
        'name', 'price', 'release', 'genres', 'instrument', 'thumbnail', 'featured', 'song_url'
    ];

    protected $searchable = [
        'name'
    ];
}
