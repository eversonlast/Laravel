<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Suport\Facedes\Auth;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function dashboard(){

        if(Auth::check()){

            // dd(Auth::user()); pegar o usuário 
            return view('admin.dashboard');
        }else{
            return redirect()->route('admin.login');
        }

    }

    public function showLoginForm(){
        return view('admin.loginForm');
    }

    public function login(Request $request){

        if(!filter_var($request->email, FILTER_VALIDATE_EMAIL)){
            return redirect()->back()->withInput()->withErrors(['o EMAIL NÃO É  VÁLIDO.']);   
        }

        $credentials = [
            'email'=>$request->email,
            'password'=>$request->password
        ];

        if(Auth::attempt($credentials)){
            return redirect()->route('admin');
        }

        return redirect()->back()->withInput()->withErrors(['Os dados informados é válido.']);
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('admin');
    }
}
