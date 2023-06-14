<?php

namespace App\Http\Controllers\WEB\Case;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $cases = Post::all();
        return view('case')->with(compact('cases'));
    }
}
