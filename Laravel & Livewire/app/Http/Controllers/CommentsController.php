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
                'comment' => 'required|min:10',
            ],[
                'family.required' => 'لطفا فیلد را پر کنید',
                'content.required' => 'لطفا فیلد را پر کنید',
                'comment.min' => 'تعداد کارکتر ها کمتر  از حد مجاز است',
            ]);
            $Comment_set = Comments::create([
                'family' => $request->family,
                'product_id' => $request->product_id-524,
                'user_id' => session('loggedUser'),
                'com_id' => $request->comment_id,
                'content' => $request->comment
            ]);
        }
        else
        {
            return back()->with('error_comment', 'لطفا ابتدا وارد حساب کاربری خود شوید');
        }
        if($Comment_set)
        {
            return back()->with('comment', 'نظر شما ثبت شده است');
        }
        else
        {
            return back()->with('comment', 'خطا در ثبت نظر');
        }
    }
}
