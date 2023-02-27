<?php

namespace App\Http\Controllers;

use App\Models\artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    public function update($id){
        $artist = artist::find($id);
        return view('artist-form',compact('artist'));
    }
    public function edit(Request $request, $id){
        $artist = artist::find($id);
        $request->validate([
            'name' => 'required|unique:posts|max:255',
            'country' => 'required'
        ]);
    }
}
