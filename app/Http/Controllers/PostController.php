<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function index()
    {
        $posts = [
            ['title' => 'Primer post'],
            ['title' => 'Segundo post'],
            ['title' => 'Tercer post'],
            ['title' => 'Cuarto post']

        ];

        return view('blog', ['posts' => $posts]);

    }

}
