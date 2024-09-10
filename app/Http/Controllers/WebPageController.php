<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class WebPageController extends Controller
{
    public function home() {
        $latestPost = Post::latest()->first();
        $otherPosts = [];
        if($latestPost){
            $otherPosts = Post::where('id', '!=', $latestPost->id)->latest()->get(); }

        return view('home', compact('latestPost', 'otherPosts'));
    }


    public function about(){
        return view('about');
    }

    public function team(){
        return view('team');
    }

    public function subsidiaries(){
        return view('subsidiaries');
    }

    public function csr(){
        return view('csr');
    }

    public function blog(){
        $categories = Category::latest()->get();

        $posts = Post::orderBy('views', 'asc')->limit(10)->get();
        $latest = Post::latest()->limit(6)->get();

        $tags = [];

        foreach($posts as $post) {
            $postTags = explode(',', $post->tags);
            $tags = array_merge($tags, $postTags);
        }

        $tags = array_unique($tags);

        return view('blog', [
            'posts' => $posts,
            'latest' => $latest,
            'categories' => $categories,
            'tags' => $tags
        ]);
    }

    public function contact(){
        return view('contact');
    }
}
