<?php

namespace App\Http\Controllers;

use App\Http\Requests\MainRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('loginscreen');
    }

    public function login(Request $request)
    {
        // Attempt to authenticate the user
        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            return redirect('/') ->with('login_success', 'Đăng nhập thành công');
        } else {
            return redirect()->back() ->with('login-error','Sai tên tài khoản hoặc mật khẩu, vui lòng đăng nhập lại');
        }
    }

    public function showRegisterForm()
    {
        return view('signupscreen');
    }

    public function register(MainRequest $request)
    {
        $user = new User([
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);
        $user->save();

        return redirect('/login')->with('register-success', 'Đăng ký thành công, vui lòng đăng nhập.');

    }

    public function logout(Request $request){
        Auth::logout();
        return redirect('/login');
    }
}
