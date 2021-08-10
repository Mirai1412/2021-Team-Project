<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    public function main(){

        return view('post.main');

    }
    public function made(){

        return view('post.made');

    }
    public function profile(){

        return view('post.profile');

    }
    public function login(){

        return view('post.login');

    }
    public function show(){

        return view('post.show');

    }
    public function store(Request $request)
    {
        $title = $request->title;
        $language = $request->language;
        $content = $request->content;

        $request->validate([
            'title' => 'required | min:3',
            'content' => 'required',
            'language' => 'required'
            //  'imageFile' => 'image | max:2000' // 필수는 아니나 이미지 파일이어야함.
        ]); // 원하는 데이터가 아니면 페이지를 자동으로 back 시켜줌


        $post = new Post();
        $post->title = $title;
        $post->content = $content;
        $post->language = $language;
        $post->user_id = Auth::user()->id;

        // if ($request->file('imageFile')) { // 파일이 필수가 아니라 없을 수도 있으므로 if
        //     $post->image = $this->uploadPostImage($request);
        // }

        $post->save();

        return redirect('/posts/index');
    }

}
