<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtistInfoController extends Controller
{
    public function edit() { 
        // $artist_info = request()->user()->artist_info;
        $artist_info = request()->user()->artist_info;
        return view('admin.artist-info.edit', compact('artist_info'));
    }

    public function store(Request $request) {
        $info = $request["info"];
        $request->user()->artist_info = $info;
        $request->user()->save();

        return redirect()->route('Arts')
                    ->with('success','Your info was updated successfully');
    }
}
