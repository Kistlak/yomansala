<?php

namespace App\Http\Controllers;

use App\Models\PodCast;
use Illuminate\Http\Request;

class AdminPodCastController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = PodCast::All()->first();

        return view('admin.podcast.index',compact('data'));
    }
     
    
    public function edit(PodCast $Podcast)
    {
        return view('admin.podcast.edit',compact('Podcast'));
    }

    
    public function update(Request $request, PodCast $Podcast)
    {
        $input = $request->all();
        $destinationPath = '../public/img/';

        if ($image = $request->file('img')) {
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['img'] = "$profileImage";
        }else{
            unset($input['img']);
        }
         
        if ($logo = $request->file('logo')) {        
            $profilelogo = date('YmdHis') . "." . $logo->getClientOriginalExtension();
            $logo->move($destinationPath, $profilelogo);
            $input['logo'] = "$profilelogo";
        }else{
            unset($input['logo']);
        }

        $Podcast->update($input);
    
        return redirect()->route('Podcast')
                        ->with('success','Updated successfully.');
    }


}
