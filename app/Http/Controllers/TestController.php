<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $users = User::with('posts')->get();
        $posts = Post::with('user')->get();
        
        return view('welcome', compact('users','posts'));
    }
}
