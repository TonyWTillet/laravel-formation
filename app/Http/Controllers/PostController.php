<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class PostController extends Controller
{
    public function index(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
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

    public function show(int $id): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $posts = [
           1 => 'Article 1',
            2 => 'Article 2',
        ];

        $post =  $posts[$id] ?? 'Article non trouvé';
        return view('article', ['post' => $post]);
    }

    public function contact(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('contact');
    }
}
