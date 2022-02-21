<?php

namespace app\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class BlogController
{
    public function show()
    {
        return view('Blog', ['articles' => Article::all()]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog-create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Article();

        $post->title = request('title');
        $post->body = request('body');
        $post->save();

        return redirect('/blog');
        //
    }
    public function edit($id)
    {
        return view('edit', ['articles' => Article::find($id)]);
    }

    public function update(Request $request, $id)
    {
        $article = Article::find($id);

        $article->title = request('title');
        $article->body = request('body');
        $article->save();

        return redirect('/blog');
        //
    }
    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect('/blog');
    }
}
