<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show(Post $article): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view('article', [
            'article' => $article,
        ]);
    }
}
