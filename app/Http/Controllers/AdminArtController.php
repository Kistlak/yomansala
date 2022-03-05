<?php

namespace App\Http\Controllers;

use App\Http\Controllers\SeriesController;
use App\Models\Art;
use App\Models\Series;
use Illuminate\Http\Request;

class AdminArtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arts = Art::latest()->get();
        return view('admin.arts.index',compact('arts'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $series = Series::all();
        return view('admin.arts.create', compact('series'));
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
            'title' => 'required',
            'year' => 'numeric'
        ]);

        $input = $request->all();

        if ($image = $request->file('img')) {
            $destinationPath = '../public/img/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['img'] = "$profileImage";
        }

        if(empty($input['url_mapped'])){
            $input['url_mapped'] =  preg_replace("/\s+/", "-",$input['title']);

            $myart = Art::where('url_mapped',$input['url_mapped'])->first();
            if($myart!=null && $myart->id>0){
                $input['url_mapped'] =  $input['url_mapped'].'1';
            }

        }

        if($request['series'] != "none") {
            $input['series_id'] = $request['series'];
        } else {
            if($request['new_series']) {
                $input['series_id'] = SeriesController::create($request['new_series']);
            }
        }
        Art::create($input);

        return redirect()->route('Arts')
                        ->with('success','Created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Art  $art
     * @return \Illuminate\Http\Response
     */
    // public function show(Art $art)
    // {
    //     return view('admin.arts.show',compact('art'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Art  $art
     * @return \Illuminate\Http\Response
     */
    public function edit(Art $art)
    {
        $series = Series::all();
        return view('admin.arts.edit',compact(['art', 'series']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Art  $art
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Art $art)
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

        if($art->title != $request->title && empty($input['url_mapped'])){
            $input['url_mapped'] =  preg_replace("/\s+/", "-",$input['title']);

            $myart = Art::where('url_mapped',$input['url_mapped'])->first();
            if($myart!=null && $myart->id>0){
                $input['url_mapped'] =  $input['url_mapped'].'1';
            }
        }

        if($request['series'] != "none") {
            $input['series_id'] = $request['series'];
        } else {
            if($request['new_series']) {
                $input['series_id'] = SeriesController::create($request['new_series']);
            }
        }

        $art->update($input);

        return redirect()->route('Arts')
                        ->with('success','Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Art  $art
     * @return \Illuminate\Http\Response
     */
    public function destroy(Art $art)
    {
        $art->delete();

        return redirect()->route('Arts')
                        ->with('success','Art deleted successfully');
    }
}
