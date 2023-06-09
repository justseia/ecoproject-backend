<?php

namespace App\Http\Controllers\WEB\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = Post::all();
        return view('home')
            ->with(compact('posts'));
    }
}
