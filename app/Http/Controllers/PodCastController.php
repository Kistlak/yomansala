<?php

namespace App\Http\Controllers;
use App\Models\PodCast;
use App\Models\Season;
use App\Models\Episode;
use Illuminate\Http\Request;

class PodCastController extends Controller
{
    public function index()
    {
        $data = PodCast::latest()->first();  
        $seasons = Season::orderBy('id', 'DESC')->get();
        $SeasonEpisodes = Episode::orderBy('id', 'DESC')->get();
         
        return view('podcast.index',compact('data','seasons','SeasonEpisodes'));
    } 
}
