<?php

namespace App\Http\Controllers;

use App\Http\Requests\AboutRequest;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class AdminAboutController extends Controller
{
    public function edit()
    {
        $existingAbout = About::first();

        if($existingAbout == null) {
            About::create([
                'file_name' => 'file name',
                'file_path' => null,
                'file_type' => 'file type'
            ]);
        }

        $about = About::first();

        return view('admin.about.edit', compact('about'));
    }

    public function update(AboutRequest $request)
    {
        $about = About::first();
        $about->description = $request->description;

        if(isset($request->about_image)) {
            $file_name = Str::random(20).$request->about_image->getClientOriginalName();
            $file_type = $request->about_image->getClientMimeType();
            $file = $request->file('about_image');

            $about->file_name = $file_name;
            $about->file_path = "storage/personal/".$file_name;
            $about->file_type = $file_type;

            Storage::disk('personal')->put($file_name, File::get($file));
        }

        $about->update();

        return Redirect::back()->with('success', 'Successfully Submitted !!');

//        return response()->json(['success' => 'Successfully Uploaded !!']);
    }
}
