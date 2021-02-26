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

    public function pilihArtikel($id){    
        return view('/admin/edit', compact('id'));
    }

    public function editArtikel(Request $request, $id){
        
        $request->validate([
            'title'  => ['required', 'unique:artikel,title', 'between:5,30'],
            'desc' => ['required'] 
        ], $this->pesan());
        

        $data = array(
            'title' => $request-> title,
            'desc'  => $request->desc,
            'slug'  => Str::slug($request-> title)
        );

        if (Artikel::where('id', $id)->update($data)) {

            Session::flash('Sukses', 'Artikel Berhasil Diupdate!');
            return redirect('/artikel/pilih/'.$id);

        } else {

            Session::flash('Gagal', 'Artikel Gagal Diupdate !');
            return redirect('/artikel/pilih/'.$id);

        }
    }

    public function hapusArtikel($id){

        if (Artikel::where('id', $id)->delete()) {
            
            Session::flash('Sukses', 'Artikel Berhasil Dihapus !');
            return redirect('/artikel/show'); 

        } else {

            Session::flash('Gagal', 'Artikel Gagal DIhapus !');
            return redirect('/artikel/show');

        }
    }

    public function pesan(){
        return [
            'title.required' => ' Judul Artikel tidak boleh kosong! ',
            'title.unique'   => ' Judul Artikel tidak boleh sama dengan judul sebelumnya! ',
            'title.between'  => ' Judul Minimal 5 Maksimal 30 Karakter! ',
            'desc.required'  => ' Isi Artikel tidak boleh kosong! ',
        ];
    }

    public function uploadImage(Request $request){
        if ($request->hasFile('upload')) {

            $file = $request->file('upload'); 
            $fileName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME); 

            $fileName = $fileName . '_' . time() . '.' . $file->getClientOriginalExtension();
    
            $file->move(public_path('uploads'), $fileName); 
    
            $ckeditor = $request->input('CKEditorFuncNum');
            $url = '/uploads/' . $fileName; 
            $msg = 'Image uploaded successfully'; 

            $response = "<script>window.parent.CKEDITOR.tools.callFunction($ckeditor, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8'); 
            return $response;
        }
    }


}