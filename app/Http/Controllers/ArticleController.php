<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Paket;

class ArticleController extends Controller
{
     public function index()
    {
        
        $articles = Artikel::latest()->take(3)->get();
        $pakets = Paket::latest()->get();
        $firstArticle = $articles->get(0);
        $secondArticle = $articles->get(1);
        $thirdArticle = $articles->get(2);

        return view('welcome', compact('firstArticle', 'secondArticle', 'thirdArticle', 'pakets')); 
    }

    public function indexArticle(){
        $articles = Artikel::latest()->get();
        return view('main.artikel', compact('articles'));	
    }
    public function indexDetail($id){
        $articles = Artikel::where('id', '!=', $id)->latest()->get(); 
        $article = Artikel::find($id);
        return view('main.detail-artikel', compact('article','articles'));	
    }
}
