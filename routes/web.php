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

Auth::routes(['reset' => false, 'register' => false]);

Route::get('/', 'GuestController@index')->name('home.index');

Route::get('/profile', 'GuestController@profile')
    ->name('home.profile');
Route::get('/car',            'GuestController@car')
    ->name('home.car');
Route::get('/travel/bandung',    'GuestController@travelBandung')
    ->name('home.travel.bandung');
Route::get('/travel/banyuwangi', 'GuestController@travelBanyuwangi')
    ->name('home.travel.banyuwangi');
Route::get('/travel/jogja',      'GuestController@travelJogja')
    ->name('home.travel.jogja');
Route::get('/travel/malang',     'GuestController@travelMalang')
    ->name('home.travel.malang');
Route::get('/travel/pacitan',    'GuestController@travelPacitan')
    ->name('home.travel.pacitan');
Route::get('/travel/semarang',   'GuestController@travelSemarang')
    ->name('home.travel.semarang');
Route::get('/testimonial',            'GuestController@testimonial')
    ->name('home.testimonial');
Route::permanentRedirect('/travel', '/');

Route::resource('articles', ArticleController::class)->except([
    'show'
]);

Route::middleware('auth')->group(function () {
    Route::get('/dashboard',            'DashboardController@dashboard')
        ->name('admin.dashboard');
    Route::get('/artikel/add',          'DashboardController@tambah');
    Route::get('/artikel/show',         'DashboardController@lihatArtikel');
    Route::get('/artikel/pilih/{id}',   'ArtikelController@pilihArtikel');
    Route::post('/artikel/edit/{id}',   'ArtikelController@editArtikel');
    Route::get('/artikel/delete/{id}',  'ArtikelController@hapusArtikel');
    Route::get('/admin/photo',          'DashboardController@photo');
    Route::post('/add_process',         'ArtikelController@add_process');
    Route::post('/upload-images',       'ArtikelController@uploadImage')
        ->name('post.gambar');
});
