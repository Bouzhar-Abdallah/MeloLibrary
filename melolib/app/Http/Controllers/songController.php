<?php

namespace App\Http\Controllers;

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
        dd($request);
    }
}
