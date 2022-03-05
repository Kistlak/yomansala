<?php

namespace App\Http\Controllers;

use App\Http\Requests\AboutRequest;
use App\Http\Requests\CvRequest;
use App\Http\Requests\HomeRequest;
use App\Models\About;
use App\Models\Cv;
use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class AdminHomeController extends Controller
{
    public function edit()
    {
        $existingImages = Home::first();

        if($existingImages == null) {
            Home::create([
                'name' => 'logo',
                'file_name' => 'file name',
                'file_path' => null,
                'file_type' => 'file type'
            ]);
            Home::create([
                'name' => 'banner',
                'file_name' => 'file name',
                'file_path' => null,
                'file_type' => 'file type'
            ]);
        }

        $logo = Home::where('name', 'logo')->first();
        $banner = Home::where('name', 'banner')->first();

        return view('admin.home.edit', compact('logo', 'banner'));
    }

    public function update(HomeRequest $request)
    {
        $logo = Home::where('name', 'logo')->first();
        $banner = Home::where('name', 'banner')->first();

        if(isset($request->logo)) {
            $file_name = Str::random(20).$request->logo->getClientOriginalName();
            $file_type = $request->logo->getClientMimeType();
            $file = $request->file('logo');

            $logo->file_name = $file_name;
            $logo->file_path = "storage/home/".$file_name;
            $logo->file_type = $file_type;

            Storage::disk('home')->put($file_name, File::get($file));

            $logo->update();
        }

        if(isset($request->banner)) {
            $file_name = Str::random(20).$request->banner->getClientOriginalName();
            $file_type = $request->banner->getClientMimeType();
            $file = $request->file('banner');

            $banner->file_name = $file_name;
            $banner->file_path = "storage/home/".$file_name;
            $banner->file_type = $file_type;

            Storage::disk('home')->put($file_name, File::get($file));

            $banner->update();
        }

        return Redirect::back()->with('success', 'Successfully Submitted !!');
    }
}
