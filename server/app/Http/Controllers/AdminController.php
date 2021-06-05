<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class AdminController extends Controller
{
    //
    public function Create_Product(Request $request)
    {
        // $request->validate([
        //     'image' => 'required|mimes:jpg,jpeg,png,gif|max:10240'
        // ]);


        $product = new Product;
        $product->name  = $request->name;
        $product->description  = $request->description;
        $product->details  = $request->details;
        $product->new  = $request->new;
        $product->url_img  = $request->image;
        $product->price  = $request->price;
        $product->price_discount  = $request->pricediscount;
        $query = $product->save();
    }
    public function index(Request $request)
    {
        $category = Category::all();
        $message = null;
        return view('admin.home',['category'=>$category , 'message' => $message]);
    }
}
