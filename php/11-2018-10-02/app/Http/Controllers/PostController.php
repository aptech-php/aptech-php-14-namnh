<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // can Request $request trong function index
    public function index()
    {
        $posts = Post::paginate(5);
        // $posts = Post::take(3)->offset($request->page * 3)->get(); day la cua a Vuong
        return view('posts.index', ['posts' => $posts]);
    }
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show', ['post' => $post]);
    }

    public function create()
    {
        return view('posts.create');
    }
    public function store(Request $request)
    {
        $post = Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'content' => $request->content,
        ]);
        return redirect()->route('posts.show', $post->id);
    }
}
