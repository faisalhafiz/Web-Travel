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
}
