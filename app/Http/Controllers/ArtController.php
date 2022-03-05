<?php

namespace App\Http\Controllers;

use App\Models\Art;
use App\Models\Series;
use Illuminate\Http\Request;

class ArtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->like = 'like=title,'.$request->like;
        // get arts belonging to a series;
        $series_arts = Art::where('series_id', '!=', 0)->with('series')->get()->groupBy('series_id');;

        $filtered_serires_arts = [];
        # Filter series, and take 1 art from series
        foreach($series_arts as $collection) {
            array_push($filtered_serires_arts, $collection[0]);
        }
        // get arts that does not belong to series
        $non_series_arts = Art::where('series_id', 0)->get();
        // concatenate both collections got, and sort them by id, then DESC (reverse());
        $arts = collect($filtered_serires_arts)->concat($non_series_arts)->sortBy('id')->reverse();
        return view('art.index', compact('arts'));
    }

    public function series($series_name) {
        $series = Series::where('name', $series_name)->get();
        if(count($series) == 0) {
            abort(404);
        }
        $series_id = $series[0]->id;
        $arts = Art::where('series_id', $series_id)->with('series')->get();
        return view('art.series', compact('arts'));
    }
    public function show(string $url){

        $arts = Art::orderBy('id', 'DESC')->get();
        $index = 0;
        $art = Art::where('url_mapped', $url)->first();
        if($art!=null){
            $i=0;
            foreach($arts as $nart){

              if($nart->id == $art->id){
                  $index=$i;
              }
              $i=$i+1;
            }

        }
        $artbefore=null;
        if($arts->get($index-1)!=null){
            $artbefore=$arts->get($index-1);
        }

        $artafter=null;
        if($arts->get($index+1)!=null){
            $artafter=$arts->get($index+1);
        }

        return view('art.details',compact('art','artbefore','artafter'));
    }
}
