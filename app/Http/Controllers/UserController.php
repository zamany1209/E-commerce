<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    //
    function login()
    {
        return view('auth.login');
    }
    function register()
    {
        return view('auth.register');
    }
    function edite_data_user()
    {
        if(session()->has('loggedUser'))
        {
            $user = User::where('id','=', session('loggedUser'))->first();
            return view('edite_data_user', ['user' => $user]);
        }
        else
        {
            return redirect('login');
        }
    }
    function check_edite_data_user(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'family' => 'required',
            'phone' => 'required|min:11|max:13'
        ],[
            'name.required' => 'لطفا نام خود را وارد کنید',
            'family.required' => 'لطفا نام خانوادگی خود را وارد کنید',
            'phone.required' => 'لطفا شماره تلفن خود را وارد کنید',
            'phone.min' => 'شماره تلفن شما کمتر از حد مجاز است',
            'phone.max' => 'شماره تلفن شما بیشتر از حد مجاز است',
        ]);
        if(session()->has('loggedUser'))
        {
            $user = User::find(session('loggedUser'));
            $user->name = $request->name;
            $user->family = $request->family;
            $user->phone = $request->phone;
            $user->save();
            return redirect('/profile');
        }
        else
        {
            return back()->with('error_user', 'لطفا ابتدا وارد حساب کاربری خود شوید');
        }
    }
    function resete_password_user()
    {
        if(session()->has('loggedUser'))
        {
            return view('resete_password_user');
        }
        else
        {
            return redirect('login');
        }
    }
    function check_resete_password_user(Request $request)
    {
        $request->validate([
            'password' => 'required|min:5|max:12',
            'new_password' => 'required|min:5|max:12',
            're_password' => 'required|min:5|max:12'
        ],[
            'password.required' => 'لطفا پسورد خود را وارد کنید',
            'password.min' => 'پسورد شما کمتر از حد مجاز است',
            'password.max' => 'پسورد شما بیشتر از حد مجاز است',
            'new_password.required' => 'لطفا پسورد جدید خود را وارد کنید',
            'new_password.min' => 'پسورد شما کمتر از حد مجاز است',
            'new_password.max' => 'پسورد شما بیشتر از حد مجاز است',
            're_password.required' => 'لطفا پسورد خود را تکرار کنید',
            're_password.min' => 'پسورد شما کمتر از حد مجاز است',
            're_password.max' => 'پسورد شما بیشتر از حد مجاز است',
        ]);
        $user = User::where('id','=', session('loggedUser'))->first();
        if(Hash::check($request->password, $user->password))
        {
            if($request->new_password == $request->re_password)
            {
                if(session()->has('loggedUser'))
                {
                    $Password_set = User::find(session('loggedUser'));
                    $Password_set->password = Hash::make($request->new_password);
                    $Password_set->save();
                }
                else
                {
                    return back()->with('error_user', 'لطفا ابتدا وارد حساب کاربری خود شوید');
                }
            }
            else
            {
                return back()->with('error_password', 'پسورد ها با هم برابر نیست');
            }
        }
        else
        {
            return back()->with('error_user', 'پسورد وارد شده اشتباه است');
        }
        if($Password_set)
        {
            return back()->with('error_user', 'پسورد جدید شما ثبت شد');
        }
        else
        {
            return back()->with('error_user', 'خطا در ثبت پسورد');
        }
    }
    function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'family' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:12',
            'password_2' => 'required|min:5|max:12'
        ]);
        if($request->password == $request->password_2)
        {
            $user = new User;
            $user->name  = $request->name;
            $user->family = $request->family;
            $user->phone = $request->phone;
            $user->email  = $request->email;
            $user->password  = Hash::make($request->password);
            $user->remember_token = $request->_token;
            $query = $user->save();
            return redirect('login');
        }
        else
        {
            return back()->with('error_password', 'You hav Password erorr');
        }
    }
    function check(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:12'
        ]);

        $user = User::where('email','=', $request->email)->first();
        if($user)
        {
            if(Hash::check($request->password, $user->password))
            {
                $request->session()->put('loggedUser', $user->id);
                return redirect('profile');
            }
            else
            {
                return back()->with('false', 'You hav password error');
            }
        }
        else
        {
            return back()->with('false', 'You hav email not find');
        }
    }
    function profile()
    {
        if(session()->has('loggedUser'))
        {
            $user = User::where('id', '=', session('loggedUser'))->first();
            $data = [
                'loggedUserInfo'=>$user
            ];
        }
        else
        {
            return redirect('login');
        }
        return view('admin.profile', $data);
    }
    function logaut()
    {
        if(session()->has('loggedUser'))
        {
            session()->pull('loggedUser');
            return redirect('login');
        }
    }
}
