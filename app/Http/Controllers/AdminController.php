<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function dashboard(){
        $users = User::all();
        $posts = Post::all();
        $views = [];

        foreach($posts as $post){
            $views[] = $post->views;
        }

        $views = array_sum($views);

        return view('admin.dashboard', compact('posts', 'users', 'views'));
    }
}
