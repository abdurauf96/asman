<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $faqs=\App\Faq::withTranslation(\App::getLocale())->get();
        $images=\App\Models\Image::withTranslation(\App::getLocale())->get();
        $page=\App\Models\Page::withTranslation(\App::getLocale())->first();
        $posts=\App\Models\Post::withTranslation(\App::getLocale())
        ->latest()
        ->limit(4)
        ->get();

    	return view('welcome', compact('faqs', 'images', 'posts', 'page'));
    }

    public function sellers()
    {
    	return view('sellers');
    }

    public function aboutUs()
    {
        $page=\App\Models\Page::withTranslation(\App::getLocale())->first();
    	return view('aboutUs', compact('page'));
    }

    public function contact()
    {
        $dillers=\App\Models\Seller::withTranslation(\App::getLocale())->get();
    	return view('contact', compact('dillers'));
    }

    public function gallery()
    {   
        $images=\App\Models\Image::all();
    	return view('gallery', compact('images'));
    }

    public function getDilers(Request $request)
    {

        $diller=\App\Models\Seller::where('region', $request->key)->withTranslation(\App::getLocale())->first();
        $res=view('ajax.diller', compact('diller'));
        return $res;
    }
}
