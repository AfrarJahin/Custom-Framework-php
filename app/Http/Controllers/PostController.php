<?php

namespace Afra\App\Http\Controllers;

use Afra\App\Models\Post;

include 'config.php';
class PostController extends Controller
{
    public function getHello()
    {
        return "Hello World";
    }



    public function index()
    {
        $post = new Post();

         config('database.host');
        return $post->findAll();
//        return $this->render('posts', compact('name', 'post'));

//        // return view with post data
//        return view('index', compact('post'))->render();

    }

    public function post()
    {
        //return "Hello World";
    }

}