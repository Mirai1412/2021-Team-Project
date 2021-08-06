<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function main(){

        return view('post.main');

    }
    public function profile(){

        return view('post.profile');

    }
    public function login(){

        return view('post.login');

    }
}
