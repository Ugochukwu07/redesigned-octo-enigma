<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\PagesControllers;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::controller(PagesControllers::class)->group(function(){
    Route::get('/','index')->name('home');
    Route::get('/portfolio','portfolio')->name('portfolio');
    Route::get('/team','team')->name('team');
    Route::get('/contact','contact')->name('contact');
    Route::get('/contact/{purpose}','contact')->where(['purpose' => '[a-z]+'])->name('contact');
        
    //Services
    Route::prefix('services')->name('services.')->group(function(){
    Route::get('/','services')->name('home');
    Route::get('/branding','branding')->name('branding');
    Route::get('/mobile','mobile')->name('mobile');
    Route::get('/web','web')->name('web');
    Route::get('/digital-marketing','digital')->name('digital');
    });
});



//Artisan
Route::get('/artisan/{command}', function($command){
    $output = [];
    Artisan::call($command, $output);
    dd($output);
});