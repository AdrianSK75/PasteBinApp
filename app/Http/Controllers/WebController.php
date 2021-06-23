<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class WebController extends Controller {
    public function home() {
        $posts =  Post::orderBy('id')->paginate(200);
        return view('home', ['posts' => $posts]);
    }

    public function create() {
        return view('posts.create');
    }

    public function store(Request $request) {
        $this->validate($request,[
            'title' => 'required',
            'body' => 'required',
        ]);
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        return redirect('/')->with('succes', 'Post Created');
    }

    public function show($id) {
        $post = Post::find($id);
        return view('posts.show')->with('post', $post);
    }

    public function edit($id) {
        $post = Post::find($id);
        return view('posts.edit')->with('post', $post);
    }

   
    public function update(Request $request, $id) {
        $this->validate($request,[
            'title' => 'required',
            'body' => 'required',
        ]);
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        return redirect('/')->with('succes', 'Post Updated');
    }

   
    public function destroy($id) {
        $post = Post::find($id);
        $post->delete();

        return redirect('/')->with('succes', 'Post Deleted');
    }
}
