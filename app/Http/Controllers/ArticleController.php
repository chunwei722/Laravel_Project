<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function index(){
       // return view('welcome');
        //return 'hello!!!';
        $articles = Article::all();
        return view('article.index',['articles'=>$articles]);
    
 }
    public function show($id){
        $article = Article::find($id);
        return view('article.show',['article'=>$article]);
      
}
 
}