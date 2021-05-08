<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;

class ArticleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderablel
     */

    public function index()
    {
        $articles = Artikel::all();
        return view('backend.pages.data.articles.indexArticles', ['articles' => $articles]);
    }

    public function create()
    {
        $category = Category::all();
        return view('backend.pages.data.articles.createArticles', ['category' => $category]);
    }

    public function store(Request $req)
    {
        // Validator
        Validator::make($req->all(), [
            'title' => 'required',
            'category' => 'required',
            'desc' => 'required',
            'img' => 'required|max:2100'
        ])->validate();

        // Create Slug
        $stringLimit = Str::words($req->title, 3);
        $stringRemove = str_replace(".", "", $stringLimit);
        $slug = Str::slug($stringRemove, '-');

        // Photo
        if ($req->hasFile('img')) {
            $imagePath = $req->file('img');
            $fileNames =  Str::words($req->title, 1) . "." . $imagePath->getClientOriginalExtension();
            $imagePath->move(public_path('thumb/'), $fileNames);
        } else {
            $fileNames = 'default.svg';
        }

        Artikel::create([
            'title' => $req->title,
            'category' => $req->category,
            'slug' => $slug,
            'desc' => $req->desc,
            'img' => $fileNames
        ]);

        return Redirect::route('articles.index');
    }

    public function destroy($id)
    {
        $artikel = Artikel::find($id);
        $artikel->delete();

        return Redirect::route('articles.index');
    }
}
