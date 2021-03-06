<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::paginate(15);

        return view('post.index', compact('posts'));

    }
    public function show($id)
    {
        $post = Post::find($id);

        return view('post.show', compact('post'));
    }

}
