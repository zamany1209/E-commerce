<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function index(Request $request)
    {
        $url = $request->url-524;
        $product = Product::where('id', '=', $url)->first();
        return view('product',['product'=> $product]);
    }
    function product_list(Request $request)
    {
        $category = Category::all();
        $pagination = 18;
        $products = Product::where('featured' , '=' , '1');
        if (request()->sort == 'low_high') {
            $products = $products->orderBy('price')->paginate($pagination);
            return view('product_list',['category' => $category,'sort' => $request->sort])->withProduct($products);
        } elseif (request()->sort == 'high_low') {
            $products = $products->orderBy('price', 'desc')->paginate($pagination);
            return view('product_list',['category' => $category,'sort' => $request->sort])->withProduct($products);
        } else {
            $products = $products->paginate($pagination);
        }
        return view('product_list',['category' => $category])->withProduct($products);
    }
    function product_list_category(Request $request)
    {
        $category = Category::all();
        $pagination = 18;
        $products = Product::where('featured' , '=' , '1')->where('category' , $request->category );
        if (request()->sort == 'low_high') {
            $products = $products->orderBy('price')->paginate($pagination);
            return view('product_list',['category_id' => $request->category, 'category' => $category,'sort' => $request->sort])->withProduct($products);
        }
        if (request()->sort == 'high_low') {
            $products = $products->orderBy('price', 'desc')->paginate($pagination);
            return view('product_list',['category_id' => $request->category, 'category' => $category,'sort' => $request->sort])->withProduct($products);
        }
        $products = $products->paginate($pagination);
        return view('product_list',['category_id' => $request->category, 'category' => $category])->withProduct($products);
    }
}
