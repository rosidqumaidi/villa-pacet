<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('auth.login');
});

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

// Villa
Route::get('/villa', 'VillaController@index')->name('villa');
Route::get('/ubah-status', 'VillaController@ubahStatus');

// Api
Route::prefix('/v1')->group(function () {
    Route::get('villa', 'Api\VillaController@show');
});
