<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthControllers;

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register dashboard routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "dashboard" middleware group. Now create something great!
|
*/

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
});