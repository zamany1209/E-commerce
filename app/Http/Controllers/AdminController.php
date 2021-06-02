<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class AdminController extends Controller
{
    //
    public function Create(Request $request)
    {
        $date = $request->name;
        return back()->with('Success', "$date");
    }
    public function index(Request $request)
    {
        $category = Category::all();
        $message = null;
        return view('admin.home',['category'=>$category , 'message' => $message]);
    }
}
