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

Route::get('/', function () {
    return view('guest.home');
})->name('home.index');

Route::get('/profile', 'GuestController@profil')
    ->name('home.profile');
Route::get('/car',            'GuestController@mobil')
    ->name('home.car');
Route::get('/travel/bandung',    'GuestController@wisata1')
    ->name('home.travel.bandung');
Route::get('/travel/banyuwangi', 'GuestController@wisata2')
    ->name('home.travel.banyuwangi');
Route::get('/travel/jogja',      'GuestController@wisata3')
    ->name('home.travel.jogja');
Route::get('/travel/malang',     'GuestController@wisata4')
    ->name('home.travel.malang');
Route::get('/travel/pacitan',    'GuestController@wisata5')
    ->name('home.travel.pacitan');
Route::get('/travel/semarang',   'GuestController@wisata6')
    ->name('home.travel.semarang');
Route::get('/testimonial',            'GuestController@photo')
    ->name('home.testimonial');

Route::resource('articles', HomeController::class)->except([
    'show'
]);

Route::middleware('auth')->group(function () {

    Route::get('/dashboard',            'DashboardController@dashboard');
    Route::get('/artikel/add',          'DashboardController@tambah');
    Route::get('/artikel/show',         'DashboardController@lihatArtikel');
    Route::get('/artikel/pilih/{id}',   'ArtikelController@pilihArtikel');
    Route::post('/artikel/edit/{id}',   'ArtikelController@editArtikel');
    Route::get('/artikel/delete/{id}',  'ArtikelController@hapusArtikel');
    Route::get('/admin/photo',          'DashboardController@photo');
    Route::post('/add_process',         'ArtikelController@add_process');
    Route::post('/upload-images',       'ArtikelController@uploadImage')->name('post.gambar');
});
