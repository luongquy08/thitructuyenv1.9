<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function getLogin()
    {
        if(!Auth::check()){
            return view('admin.module.login.login');
        }
        return redirect('uet-admin');
    }

    public function postLogin(LoginRequest $request)
    {
        $login = ['email' => $request->txtEmail,
            'password' => $request->txtPass,
            'level' => 1
        ];

        if (Auth::attempt($login)) {
            return redirect('uet-admin');
        } else {
            return redirect()->back();
        }
    }
    public function getLogout(){
        Auth::logout();
        return redirect()->route('getLogin');
    }
}
