<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtController;
use App\Http\Controllers\PodCastController;
use App\Http\Controllers\AdminArtController;
use App\Http\Controllers\AdminPodCastController;
use App\Http\Controllers\AdminSeasonController;
use App\Http\Controllers\ArtistInfoController;
use App\Http\Controllers\AdminAboutController;
use App\Http\Controllers\AdminCvController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CvController;
use App\Http\Controllers\AdminHomeController;
use App\Models\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('home');
//});

Route::get('/artist', function () {
    $artist_info = User::find(1)->artist_info;
    return view('artist', compact('artist_info'));
});


Route::resource('art', ArtController::class);
Route::resource('podcast', PodCastController::class);

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/contact','App\Http\Controllers\NewsletterController@create');
Route::post('/contact','App\Http\Controllers\NewsletterController@store');

Route::get('/art/series/{series_name}', 'App\Http\Controllers\ArtController@series');

Route::get('/about', [AboutController::class, 'index'])->name('about.index');
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/cv', [CvController::class, 'index'])->name('cv.index');

Route::middleware('auth')->group(function() {
    Route::get('/admin/arts', [AdminArtController::class, 'index'])->name('Arts');
    Route::get('/admin/arts/create', [AdminArtController::class, 'create'])->name('Arts.create');
    Route::get('/admin/arts/edit{art}', [AdminArtController::class, 'edit'])->name('Arts.edit');
    /* Route::get('/admin/arts/show{art}', [AdminArtController::class, 'show'])->name('Arts.show'); */
    Route::delete('/admin/arts/destroy{art}', [AdminArtController::class, 'destroy'])->name('Arts.destroy');
    Route::post('/admin/arts/store', [AdminArtController::class, 'store'])->name('Arts.store');
    Route::put('/admin/arts/update{art}', [AdminArtController::class, 'update'])->name('Arts.update');

    Route::get('/admin/artist-info', [ArtistInfoController::class, 'edit'])->name('admin.artist-info.edit');
    Route::post('/admin/artist-info', [ArtistInfoController::class, 'store'])->name('admin.artist-info.store');


    /** PODCAST */
    Route::get('/admin/podcast', [AdminPodCastController::class, 'index'])->name('Podcast');
    Route::get('/admin/podcast/edit{podcast}', [AdminPodCastController::class, 'edit'])->name('Podcast.edit');
    Route::put('/admin/podcast/update{podcast}', [AdminPodCastController::class, 'update'])->name('Podcast.update');

    /** SEASONS */
    Route::get('/admin/season', [AdminSeasonController::class, 'index'])->name('Seasons');
    Route::get('/admin/season/create', [AdminSeasonController::class, 'create'])->name('Seasons.create');
    Route::get('/admin/season/edit{season}', [AdminSeasonController::class, 'edit'])->name('Seasons.edit');
    Route::delete('/admin/season/destroy{season}', [AdminSeasonController::class, 'destroy'])->name('Seasons.destroy');
    Route::post('/admin/season/store', [AdminSeasonController::class, 'store'])->name('Seasons.store');
    Route::put('/admin/season/update{season}', [AdminSeasonController::class, 'update'])->name('Seasons.update');

    /** EPISODES */
    Route::delete('/admin/episode/destroy{episode}', [AdminSeasonController::class, 'EpisodeDestroy'])->name('Episode.destroy');
    Route::get('/admin/episode/create', [AdminSeasonController::class, 'EpisodeCreate'])->name('Episode.create');
    Route::get('/admin/episode/edit{episode}', [AdminSeasonController::class, 'EpisodeEdit'])->name('Episode.edit');
    Route::post('/admin/episode/store', [AdminSeasonController::class, 'EpisodeStore'])->name('Episode.store');
    Route::put('/admin/episode/update{episode}', [AdminSeasonController::class, 'EpisodeUpdate'])->name('Episode.update');

    Route::get('/admin/about', [AdminAboutController::class, 'edit'])->name('about.edit');
    Route::put('/admin/about', [AdminAboutController::class, 'update'])->name('about.update');
    Route::get('/admin/cv', [AdminCvController::class, 'edit'])->name('cv.edit');
    Route::put('/admin/cv', [AdminCvController::class, 'update'])->name('cv.update');
    Route::get('/admin/home', [AdminHomeController::class, 'edit'])->name('home.edit');
    Route::put('/admin/home', [AdminHomeController::class, 'update'])->name('home.update');

    Route::get('/admin/linkstorage', function () {
        Artisan::call('storage:link');
    });
});


