<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Hydro\PagesControllers;

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('hydro')->name('hydro.')->group(function () {
    Route::get('/', [PagesControllers::class, 'index'])->name('home');
    Route::get('/portfolio', [PagesControllers::class, 'portfolio'])->name('portfolio');
    Route::get('/team', [PagesControllers::class, 'team'])->name('team');
    Route::get('/contact', [PagesControllers::class, 'contact'])->name('contact');
    
    //Services
    Route::prefix('services')->name('services.')->group(function(){
        Route::get('/', [PagesControllers::class, 'services'])->name('home');
        Route::get('/branding', [PagesControllers::class, 'branding'])->name('branding');
        Route::get('/mobile', [PagesControllers::class, 'mobile'])->name('mobile');
        Route::get('/web', [PagesControllers::class, 'web'])->name('web');
        Route::get('/digital-marketing', [PagesControllers::class, 'digital'])->name('digital');
    });

});

//Artisan
Route::get('/artisan/{command}', function($command){
    $output = [];
    Artisan::call($command, $output);
    dd($output);
});