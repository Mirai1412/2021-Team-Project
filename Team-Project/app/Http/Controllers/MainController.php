<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function main()
    {
        $posts = Post::latest()->Paginate(3);

        return view('main', ['posts' => $posts]);
    }
}
