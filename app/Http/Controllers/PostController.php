<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        $posts = Post::all();

        return view('posts.index', compact('posts'));

    }

    public function show($id){

        $post = Post::findOrFail($id);

        return view('posts.show', compact('post'));

    }

    public function edit($id){

        $post = Post::findOrFail($id);

        return view('posts.edit', compact('post'));

    }

    public function update(Request $request){

        request()->validate([

            'title'=>'required',
            'content'=>'required'

        ]);

        $post = Post::findOrFail($request->id);

        $post->title=$request->title;
        $post->content=$request->content;

        $post->save();

        return redirect('/posts');

    }
}
