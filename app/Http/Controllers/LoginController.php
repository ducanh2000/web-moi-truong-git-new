<?php

namespace App\Http\Controllers;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
// namespace App\Http\Controllers\Auth;

// use App\Http\Controllers\Controller;
// use Illuminate\Foundation\Auth\AuthenticatesUsers;
// use App\User;


class LoginController extends Controller
{
    public function GetLogin()
    {
        return view('login.login');
    }

    public function PostLogin(LoginRequest $request)
    {

    // dd($request->all());

        $name=$request->name;
        $password=$request->password;
        if( Auth::attempt(['name' => $name, 'password' => $password]))
        {
            return redirect('/admin');
        }
        else
        {
            return  redirect('login')->with("thongbao","Tài khoản hoặc mật khẩu không chính xác !")->withInput();
        }
        $request->session()->forget('key');
    }

    // public function GetLogout()
    // {
    //     Auth::logout();
    //     return redirect('login');
    // }
    public function GetLogout()
    {
        Auth::logout();
        return redirect('admin/login');
    }
    // if ($request->session()->has('users')) {
     
    // }
}
