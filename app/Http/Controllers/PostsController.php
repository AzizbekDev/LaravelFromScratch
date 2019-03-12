<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->only('create','store');
    }

    public function index(){
        $posts = Post::latest()->get();
        return view('posts.index', compact('posts'));
    }


    public function create(){
        return view('posts.create');
    }

    public function store(Request $request, Post $post){
        $post->create([
            'user_id' => auth()->id(),
            'title' =>request('title'),
            'body' => request('body')
        ]);
        return redirect()->route('post.index');
    }
}
