<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function index(Request $request)
    {
        $id = $request->url;
        $data = Product::where('id', '=', $id-524)->first();
        return view('product', $data);
    }
}
