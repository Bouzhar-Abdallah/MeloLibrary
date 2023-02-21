<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use App\Models\song;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SongController extends Controller
{
    public function index(Request $request): View
    {
        $songs = song::all();
        return view(
            'song.new',
            ['songs' => $songs]
        );
    }
    public function save(Request $request)
    {
        
        $song = song::create([
            "title" => $request->title,
            "url" => 'test',
            "cover_id" => 1,
            "duration" => 300,
            "release_date" => $request->release_date,
            "lyrics" => $request->lyrics 
        ]);
        $song->bands()->attach($request->band);
        $song->genres()->attach($request->genre);
        $song->artists()->attach($request->artist);

        return redirect('/admin/song/new');
    }
}
