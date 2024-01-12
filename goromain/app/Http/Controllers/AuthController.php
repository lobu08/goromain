<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
            return response()->json(['thongbao' => 'Đăng nhập thành công'], 200);
        } else {
            return response()->json(['loi' => 'Đăng nhập thất bại'], 401);
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

        return redirect('/login')->with('thongbao', 'Đăng ký thành công, vui lòng đăng nhập.');

    }
}
