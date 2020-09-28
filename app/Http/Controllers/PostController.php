<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function posts()
    {
    	$posts=\App\Models\Post::withTranslation(\App::getLocale())->paginate(8);

    	return view('posts', compact('posts'));
    }

    public function viewPost($slug)
    {
    	$post=\App\Models\Post::withTranslation(\App::getLocale())
    	->where('slug', $slug)
    	->first();

         $posts=\App\Models\Post::withTranslation(\App::getLocale())
        ->latest()
        ->limit(4)
        ->get();

    	return view('viewPost', compact('post', 'posts'));
    }

    public function sortPost(Request $request)
    {
        $posts=\App\Models\Post::where('category', $request->key)
        ->withTranslation(\App::getLocale())
        ->get();
        $res=view('ajax.sortPost', compact('posts'));
        return $res;
    }
}
