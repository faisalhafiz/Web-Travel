<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Artikel;
use Illuminate\Support\Facades\Session;

class ArtikelController extends Controller
{
    
    public function add_process(Request $request) {
        
        $request->validate([
            'title'  => ['required', 'unique:artikel,title', 'between:5,30'],
            'desc' => ['required', 'between:5,255'] 
        ], $this->pesan());

        $data = array(
            'title' => $request->title,
            'desc'  => $request->desc
        );

        if (Artikel::create($data)) {

            Session::flash('Sukses', ' Artikel Berhasil Ditambahkan !');
            return redirect('/add');

        } else {

            Session::flash('Gagal', ' Artikel Gagal Ditambahkan !');
            return redirect('/add');

        }
    }

    public function pesan(){
        return [
            'title.required' => ' Judul Artikel tidak boleh kosong! ',
            'title.unique'   => ' Judul Artikel tidak boleh sama dengan judul sebelumnya! ',
            'title.between'  => ' Judul terlalu pendek / terlalu panjang! ',
            'desc.required'  => ' Isi Artikel tidak boleh kosong! ',
            'desc.between'   => ' Isi Artikel terlalu pendek / terlalu panjang! ',
        ];
    }
}