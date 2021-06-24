<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;

class HomeController extends Controller
{
    //
    public function index()
    {
        if(session()->has('user'))
        {
            $user = User::where('id', '=', session('loggedUser'))->first();

        }
        $data = Product::all();
        return view('home' , ['product' => $data]);
    }
}
