<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products($category=null, $slug=null)
    {
    	if ($slug) {
    		$category=\App\Models\Category::withTranslation(\App::getLocale())->where('slug', $slug)->first();
    		$products=\App\Models\Product::where('category_id', $category->id)
    		->withTranslation(\App::getLocale())
    		->get();
    	}else{
    		$products=\App\Models\Product::withTranslation(\App::getLocale())->get();
    	}
    	return view('products', compact('products'));
    }

    public function viewProduct($slug)
    {
    	$product=\App\Models\Product::withTranslation(\App::getLocale())->where('slug', $slug)->first();

    	return view('viewProduct', compact('product'));
    }

    public function search(Request $request)
    {
        $data=$request->data;

        $products=\App\Models\Product::where('name', 'LIKE', '%'.$request->data.'%')
        ->orWhere('description', 'LIKE', '%'.$request->data.'%' )
        ->orWhere('body', 'LIKE', '%'.$request->data.'%')
        ->get();
        return view('search', compact('products', 'data'));
    }
}
