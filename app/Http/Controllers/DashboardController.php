<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel as KancilBinal;

class DashboardController extends Controller
{
    
    public function dashboard(){
        return view('admin.index');
    }

    public function lihat(){
        $dadaMontok = KancilBinal::all();
        return view('admin.show', compact('dadaMontok'));
    }

    public function tambah(){
        return view('admin.add');
    }
    
    public function photo()
    {
        return view('admin.photo');
    }
}
