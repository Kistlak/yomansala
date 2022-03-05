<?php

namespace App\Http\Controllers;

use App\Http\Requests\AboutRequest;
use App\Http\Requests\CvRequest;
use App\Models\About;
use App\Models\Cv;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class AdminCvController extends Controller
{
    public function edit()
    {
        $existingCv = Cv::first();

        if($existingCv == null) {
            Cv::create([
                'file_name' => 'file name',
                'file_path' => null,
                'file_type' => 'file type'
            ]);
        }

        $cv = Cv::first();

        return view('admin.cv.edit', compact('cv'));
    }

    public function update(CvRequest $request)
    {
        $cv = Cv::first();

        if(isset($request->cv)) {
            $file_name = Str::random(20).$request->cv->getClientOriginalName();
            $file_type = $request->cv->getClientMimeType();
            $file = $request->file('cv');

            $cv->file_name = $file_name;
            $cv->file_path = "storage/personal/".$file_name;
            $cv->file_type = $file_type;

            Storage::disk('personal')->put($file_name, File::get($file));
        }

        $cv->update();

        return Redirect::back()->with('success', 'Successfully Submitted !!');
    }
}
