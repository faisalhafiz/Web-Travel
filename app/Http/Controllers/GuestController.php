<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Support\Str;

class GuestController extends Controller
{

    public function index()
    {
        $post = Artikel::all();
        $randomPost = Artikel::find(rand(Artikel::min('id'), Artikel::max('id')));
        return view('frontend.pages.index', ['post' => $post, 'randomPost' => $randomPost]);
    }

    public function profile()
    {
        return view('frontend.pages.profile');
    }

    public function car()
    {
        $post = Artikel::where('category', 1)->get();
        return view('frontend.pages.car', ['post' => $post]);
    }

    public function testimonial()
    {
        return view('frontend.pages.testimonial');
    }

    public function travelBandung()
    {
        $post = Artikel::where('category', 2)->get();
        return view('frontend.pages.travel.travelBandung', ['post' => $post]);
    }

    public function travelBanyuwangi()
    {
        $post = Artikel::where('category', 3)->get();
        return view('frontend.pages.travel.travelBanyuwangi', ['post' => $post]);
    }

    public function travelJogja()
    {
        $post = Artikel::where('category', 4)->get();
        return view('frontend.pages.travel.travelJogja', ['post' => $post]);
    }

    public function travelMalang()
    {
        $post = Artikel::where('category', 5)->get();
        return view('frontend.pages.travel.travelMalang', ['post' => $post]);
    }

    public function travelPacitan()
    {
        $post = Artikel::where('category', 6)->get();
        return view('frontend.pages.travel.travelPacitan', ['post' => $post]);
    }

    public function travelSemarang()
    {
        $post = Artikel::where('category', 7)->get();
        return view('frontend.pages.travel.travelSemarang', ['post' => $post]);
    }
}
