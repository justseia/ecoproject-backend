<?php

namespace App\Http\Controllers\API\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $blogs = Blog::all();
        return response()->json($blogs);
    }
}
