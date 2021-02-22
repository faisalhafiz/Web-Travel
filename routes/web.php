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
Auth::routes();

Route::get('/', function(){
    return view('guest.home');
});

Route::resource('articles', HomeController::class)->except([
    'show'
]);

Route::middleware('auth')->group(function(){

    Route::get('/dashboard', 'DashboardController@dashboard');
    Route::get('/add', 'DashboardController@tambah');
    Route::get('/create', 'DashboardController@buat');
    Route::get('/photo', 'DashboardController@photo');
    Route::post('/add_process', 'ArtikelController@add_process');
});

