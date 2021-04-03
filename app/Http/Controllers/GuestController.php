<?php

namespace App\Http\Controllers;

class GuestController extends Controller
{

    public function home()
    {
        return view('guest.home');
    }

    public function profile()
    {
        return view('frontend.pages.profile');
    }

    public function car()
    {
        return view('frontend.pages.car');
    }

    public function testimonial()
    {
        return view('frontend.pages.testimonial');
    }

    public function travelBandung()
    {
        return view('frontend.pages.travel.travelBandung');
    }

    public function travelBanyuwangi()
    {
        return view('frontend.pages.travel.travelBanyuwangi');
    }

    public function travelJogja()
    {
        return view('frontend.pages.travel.travelJogja');
    }

    public function travelMalang()
    {
        return view('frontend.pages.travel.travelMalang');
    }

    public function travelPacitan()
    {
        return view('frontend.pages.travel.travelPacitan');
    }

    public function travelSemarang()
    {
        return view('frontend.pages.travel.travelSemarang');
    }
}
