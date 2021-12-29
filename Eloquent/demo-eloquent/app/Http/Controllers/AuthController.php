<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use MongoDB\Driver\Session;

class AuthController extends Controller
{
    public function showFormLogin()
    {
        return view("backend.auth.login");
    }

    public function login(Request $request)
    {
        $data = $request->only("email","password");
        if(Auth::attempt($data))
        {
            return redirect()->route("posts.index");
        } else {
            dd("Sai tên đăng nhập hoặc mật khẩu");
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route("login");
    }


    public function showFormRegister ()
    {
        return view("backend.auth.register");
    }

    public function register(Request $request)
    {
        $data = $request->only("name","email","password");
        $data['password'] = Hash::make($request->password);
        User::query()->create($data);
        return redirect()->route("users.create");
    }

}