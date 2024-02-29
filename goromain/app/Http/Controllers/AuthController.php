<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('loginscreen');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to authenticate the user
        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            return redirect('/') ->with('login_success', 'Đăng nhập thành công');
        } else {
            return redirect()->back() ->with('error','Sai tên tài khoản hoặc mật khẩu, vui lòng đăng nhập lại');
        }
    }

    public function showRegisterForm()
    {
        return view('signupscreen');
    }

    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        // Create a new user
        $user = new User([
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        // Save the user to the database
        $user->save();

        return redirect('/')->with('thongbao', 'Đăng ký thành công, vui lòng đăng nhập.');

    }

    public function logout(Request $request){
        Auth::logout();
        return redirect('/login');
    }
}
