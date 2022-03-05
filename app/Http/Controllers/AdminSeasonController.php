<?php

namespace App\Http\Controllers;

use App\Models\Season;
use App\Models\Episode;
use Illuminate\Http\Request;

class AdminSeasonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seasons = Season::orderBy('id', 'DESC')->get();
        $SeasonEpisodes = Episode::latest()->get();

        return view('admin.season.index',compact('seasons','SeasonEpisodes'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.season.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required'
        ]);

        Season::create($request->all());
        return redirect()->route('Seasons')
                        ->with('success','Created successfully.');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Season $season)
    {

        return view('admin.season.edit',compact('season'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Season $season)
    {
        $request->validate([
            'title' => 'required'
        ]);

        $season->update($request->all());

        return redirect()->route('Seasons')
                        ->with('success','Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Season $season)
    {
        $season->delete();

        return redirect()->route('Seasons')
                        ->with('success','Season deleted successfully');
    }


        /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function EpisodeDestroy(Episode $episode)
    {
        $episode->delete();

        return redirect()->route('Seasons')
                        ->with('success','Episode deleted successfully');
    }

       /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function EpisodeEdit(Episode $episode)
    {
        $seasons = Season::all();
        return view('admin.episode.edit',compact('episode','seasons'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function Episodeupdate(Request $request, Episode $episode)
    {
        $request->validate([
            'title' => 'required'
        ]);

        $input = $request->all();

        if ($image = $request->file('img')) {
            $destinationPath = '../public/img/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['img'] = "$profileImage";
        }else{
            unset($input['img']);
        }

        $episode->update($input);

        return redirect()->route('Seasons')
                        ->with('success','Updated successfully.');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Episodecreate()
    {
        $seasons = Season::all();
        return view('admin.episode.create',compact('seasons'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function Episodestore(Request $request)
    {
        $request->validate([
            'title' => 'required'
        ]);

        $input = $request->all();

        if ($image = $request->file('img')) {
            $destinationPath = '../public/img/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['img'] = "$profileImage";
        }


        Episode::create($input);

        return redirect()->route('Seasons')
                        ->with('success','Created successfully.');
    }

}
