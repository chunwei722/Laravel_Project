<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    /**
     * 
     */
    public function index()
    {
        //要記得在namespace引用use App\Article，才能打MODEL名稱
        $articles = Article::all();
        return view('admin.article.index', ['articles' => $articles]);
    }

    /**
     * 
     */
    public function create()
    {
        return view('admin.article.create');
    }

    /**
     * 儲存一篇部落格新文章。
     *
     * @param  Request  $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
    $request->validate([
        'title' => 'required|max:255',
        'image' => 'required',
        'content' => 'required',
        'map' => 'required',

      ]);

        $article = new Article();
        // dd($article);
        $article->title= $request->title;
        $article->image = $request->image;
        $article->content = $request->content;
        $article->map = $request->map;
        //$article -> create_time = date('Y-m-d H:i:S');
        $article->save();

        return redirect('admin/article');
    }

    public function edit($id)
    {
        $article = Article::find($id);
        return view ('admin.article.edit',['article' => $article]);
    }

    public function update(Request $request, $id)
    {
        $article = Article::find($id);
        $article->title = $request->title;
        $article->image = $request->image;
        $article->content = $request->content;
        $article->map = $request->map;
        //dd($request->all());
        // Article::where('id', $id)->update($request->except('_method', '_token'));

        $article->save();
        // dd('123');
        return redirect('/admin/article');
    }

    public function delete($id){
        $article = Article::find($id);
        $article -> delete();
        return redirect('admin/article');
    }
}
