<?php

namespace App\Http\Controllers;

class PostController extends Controller
{
    public function index()
    {
        $articles2 = [
            'Article 1' => ['title' => 'Article 1', 'body' => 'Article 1 body'],
            'Article 2' => ['title' => 'Article 2', 'body' => 'Article 2 body'],
            'Article 3' => ['title' => 'Article 3', 'body' => 'Article 3 body'],
        ];
/*        return view('articles', compact('articles2'));*/
/*        return view('articles')->with('articles', $articles2);*/
        return view('articles', ['articles' => $articles2]);

    }
}
