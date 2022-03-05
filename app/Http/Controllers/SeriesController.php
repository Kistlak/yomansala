<?php

namespace App\Http\Controllers;

use App\Models\Series;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public static function create($series_name) {
        $series = Series::create(['name' => $series_name]);
        $series = $series->fresh();
        return $series->id;
    }
}
