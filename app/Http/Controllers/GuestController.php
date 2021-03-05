<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{

    public function home()
    {
        return view('guest.home');
    }


    public function profil()
    {
        return view('guest.profil');
    }

    public function mobil()
    {
        return view('guest.mobil');
    }

    public function photo()
    {
        return view('guest.photo');
    }

    public function wisata1()
    {
        return view('guest.wisatabandung');
    }

    public function wisata2()
    {
        return view('guest.wisatabanyuwangi');
    }

    public function wisata3()
    {
        return view('guest.wisatajogja');
    }

    public function wisata4()
    {
        return view('guest.wisatamalang');
    }

    public function wisata5()
    {
        return view('guest.wisatapacitan');
    }

    public function wisata6()
    {
        return view('guest.wisatasemarang');
    }
}
