<?php

namespace app\Http\Controllers;

use App\Models\Article;

class BlogController
{
    public function show()
    {
        return view('Blog', ['articles' => Article::all()]);
    }
}
