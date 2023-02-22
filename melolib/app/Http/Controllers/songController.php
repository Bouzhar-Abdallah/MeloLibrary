<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Cloudinary;
class SongController extends Controller
{
    public function index(Request $request): View
    {
        //$songs = song::all();
        $songs = Song::with('artists', 'genres', 'bands')->get();

        /* 
        echo '<pre>';
        var_dump($songs[1]->bands);
        echo '</pre>'; 
        die();
        */
        return view(
            'song.new',
            ['songs' => $songs]
        );
    }
    public function save(Request $request)
    {
        $file = $request->file('cover');
        $uploadResult =  Cloudinary::UploadApi()->upload($file->getPathname());
        $imageUrl = $uploadResult['secure_url'];

        $song = Song::create([
            "title" => $request->title,
            "url" => 'test',
            "cover_url" => $imageUrl,
            "duration" => 300,
            "release_date" => $request->release_date,
            "lyrics" => $request->lyrics
        ]);

        $selectedArtistIds = $request->input('artist', []);
        $song->artists()->attach($selectedArtistIds);

        $selectedBandIds = $request->input('band', []);
        $song->bands()->attach($selectedBandIds);

        $selectedGenreIds = $request->input('genre', []);
        $song->genres()->attach($selectedGenreIds);
        


        return redirect('/admin/song/new');
    }
}
