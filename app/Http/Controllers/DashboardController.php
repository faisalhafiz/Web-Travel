<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel as Lihat;

class DashboardController extends Controller
{

    public function dashboard()
    {
        // return view('admin.index');
        return view('backend.pages.dashboard');
    }

    public function lihatArtikel()
    {
        $bungkus = Lihat::all();
        return view('admin.show', compact('bungkus'));
    }

    public function tambah()
    {
        return view('admin.add');
    }

    public function photo()
    {
        return view('admin.photo');
    }
}
