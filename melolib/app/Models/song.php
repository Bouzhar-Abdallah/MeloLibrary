<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class song extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'artist', 'band' , 'url' , 'cover_id' , 'duration' , 'release_date', 'lyrics', 'genre'];

    public function bands()
    {
        return $this->belongsToMany(Band::class, 'song_bands');
    }
    public function genres()
    {
        return $this->belongsToMany(genre::class, 'song_genres');
    }
    public function artists()
    {
        return $this->belongsToMany(artist::class, 'song_artists');
    }
}
