<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    public function dashboard(){
        return view('admin.index');
    }

    public function buat(){
        return view('admin.create');
    }

    public function tambah(){
        return view('admin.add');
    }
    
    public function photo()
    {
        return view('admin.photo');
    }
}
