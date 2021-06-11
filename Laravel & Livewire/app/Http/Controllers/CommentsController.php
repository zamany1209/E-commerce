<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    //
    function create(Request $request)
    {
        if(session()->has('loggedUser'))
        {
            $request->validate([
                'family' => 'required',
                'product_id' => 'required',
                'user_id' => 'required',
                'comment' => 'required|min:10',
            ],[
                'family.required' => 'لطفا فیلد را پر کنید',
                'user_id.required' => 'لطفا ابتدا وارد حساب کاربری خود شوید',
                'content.required' => 'لطفا فیلد را پر کنید',
                'comment.min' => 'تعداد کارکتر ها کمتر  از حد مجاز است',
            ]);
            $Comment = Comments::create([
                'family' => "1",
                'product_id' => "1",
                'user_id' => "1",
                'comment' => "65",
            ]);
        }
        else
        {
            return back()->with('error_comment', 'لطفا ابتدا وارد حساب کاربری خود شوید');
        }
        if($Comment)
        {
            return back()->with('comment', 'نظر شما ثبت شده است');
        }
        else
        {
            return back()->with('false', 'You hav been false register');
        }
    }
}
