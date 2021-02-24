<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Artikel;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;


class ArtikelController extends Controller
{
    
    public function add_process(Request $request) {
        
        $request->validate([
            'title'  => ['required', 'unique:artikel,title', 'between:5,30'],
            'desc' => ['required'] 
        ], $this->pesan());

        $data = array(
            'title' => $request->title,
            'desc'  => $request->desc,
            'slug'  => Str::slug($request->title)
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

    public function uploadImage(Request $request){
        if ($request->hasFile('upload')) {

            $file = $request->file('upload'); //SIMPAN SEMENTARA FILENYA KE VARIABLE
            $fileName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME); //KITA GET ORIGINAL NAME-NYA
            //KEMUDIAN GENERATE NAMA YANG BARU KOMBINASI NAMA FILE + TIME
            $fileName = $fileName . '_' . time() . '.' . $file->getClientOriginalExtension();
    
            $file->move(public_path('uploads'), $fileName); //SIMPAN KE DALAM FOLDER PUBLIC/UPLOADS
    
            //KEMUDIAN KITA BUAT RESPONSE KE CKEDITOR
            $ckeditor = $request->input('CKEditorFuncNum');
            $url = '/uploads/' . $fileName; 
            $msg = 'Image uploaded successfully'; 
            //DENGNA MENGIRIMKAN INFORMASI URL FILE DAN MESSAGE
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($ckeditor, '$url', '$msg')</script>";
    
            //SET HEADERNYA
            @header('Content-type: text/html; charset=utf-8'); 
            return $response;
        }
    }


}