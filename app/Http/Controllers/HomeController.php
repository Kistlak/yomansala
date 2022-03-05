<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $logo = Home::where('name', 'logo')->first();
        $banner = Home::where('name', 'banner')->first();

        return view('home', compact('logo', 'banner'));
    }

    public function indexC()
    {
        $logo = Home::where('name', 'logo')->first();
        $banner = Home::where('name', 'banner')->first();

        return view('home', compact('logo', 'banner'));
    }
}
