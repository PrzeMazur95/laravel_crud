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

    public function delete(Request $request){

    $post = Post::findOrFail($request->id);
    $post->delete();

        return redirect('/posts');

    }

    public function create(){

       return view('posts.create');

    }

    public function save(Request $request){

        request()->validate([

            'title'=>'required',
            'content'=>'required'

        ]);

        $post = new Post;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();

        return redirect('/posts');

    }
}
