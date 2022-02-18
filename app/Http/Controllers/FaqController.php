<?php

namespace app\Http\Controllers;

use App\Models\faq;

class FaqController
{
    public function show()
    {
        $posts = faq::all();
        return view('Faq', [
            'posts' => $posts
        ]);
        ;
    }
}
