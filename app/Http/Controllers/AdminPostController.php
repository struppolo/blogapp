<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class AdminPostController extends Controller
{
    public function index(){

        $posts = Post::all();
        return view('admin.posts',compact('posts'));

    }
}
