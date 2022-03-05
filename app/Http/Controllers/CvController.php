<?php

namespace App\Http\Controllers;

use App\Models\Cv;
use Illuminate\Http\Request;

class CvController extends Controller
{
    public function index()
    {
        $cv = Cv::first();

        return view('cv', compact('cv'));
    }
}
