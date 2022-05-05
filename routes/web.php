<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthControllers;
use App\Http\Controllers\PagesControllers;
use App\Http\Controllers\TicketController;

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
    Route::get('/contact/{purpose}','contact')->where(['purpose' => '[a-z\s]+'])->name('contact');
        
    //Services
    Route::prefix('services')->name('services.')->group(function(){
        Route::get('/','services')->name('home');
        Route::get('/branding','branding')->name('branding');
        Route::get('/mobile','mobile')->name('mobile');
        Route::get('/web','web')->name('web');
        Route::get('/digital-marketing','digital')->name('digital');
    });

    //Auth
    Route::get('/auth/login', 'login')->name('auth.login');
});

Route::controller(AuthControllers::class)->group(function(){
    Route::post('/auth/login/check', 'loginCheck')->name('auth.login.check');
});

//Tickets
Route::controller(TicketController::class)->name('question.')->group(function(){
    Route::post('/question/save', 'questionSave')->name('save');
});





//Artisan
Route::get('/artisan/{command}', function($command){
    $output = [];
    Artisan::call($command, $output);
    dd($output);
});

/* 
Route::prefix('dashboard')->name('dashboard.')->group(function(){
    Auth::routes();

    Route::get('/', [HomeController::class, 'index'])->name('index');
    Auth::routes();

    Route::group(['middleware' => 'auth'], function () {
        Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
        Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
        Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
        Route::get('upgrade', function () {return view('pages.upgrade');})->name('upgrade'); 
        Route::get('map', function () {return view('pages.maps');})->name('map');
        Route::get('icons', function () {return view('pages.icons');})->name('icons'); 
        Route::get('table-list', function () {return view('pages.tables');})->name('table');
        Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
    });
}); */