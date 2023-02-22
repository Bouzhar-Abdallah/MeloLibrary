<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use CloudinaryLabs\CloudinaryLaravel\MediaAlly;
class song extends Model
{
    use HasFactory;
    use MediaAlly;
    protected $fillable = ['title', 'artist', 'band' , 'url' , 'cover_id' , 'duration' , 'release_date', 'lyrics', 'genre'];

    public function bands()
    {
        return $this->belongsToMany(Band::class);
    }
    public function genres()
    {
        return $this->belongsToMany(genre::class);
    }
    public function artists()
    {
        return $this->belongsToMany(artist::class);
    }
}
