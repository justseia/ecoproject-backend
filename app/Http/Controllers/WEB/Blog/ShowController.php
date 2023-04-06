<?php

namespace App\Http\Controllers\WEB\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Blog $blog)
    {
        return view('blog-single')
            ->with(compact('blog'));
    }
}
