<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePostRequest;
use App\Models\Post;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    
    public function index()
    {
        $posts =  Post::get();

        return view('posts.index', ['posts' => $posts]);

    }

    public function show (Post $post)
    {

        return view('posts.show',['post'=> $post]);

    }

    public function create (Post $post)
        {

            return view('posts.create',['post'=> $post]);

        }

    public function store (SavePostRequest $request)
    {
       
        Post::create($request->validated());

        session()->flash('status', 'Post Creado!');

        return to_route('posts.index');
    }

    public function edit(Post $post)
    {
        
        return view('posts.edit', ['post' => $post]);
    }

    public function update(SavePostRequest $request, Post $post){
        
        $post->update($request->validated());

        session()->flash('status', 'Post Creado!');

        return to_route('posts.show', $post);
    }
}
