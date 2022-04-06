<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function auth(Request $request){
        $credentials =  $request->validate([
            'username' =>'required',
            'password' =>'required',
        ]); 

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if(Auth::user() &&  Auth::user()->is_admin == 1){
                return redirect('/admin');
            }else {
                return redirect('/');
            }
        }
 
        return redirect('/login')->with('invalid', 'username atau password salah');
        
    }

    public function logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
 
        $request->session()->regenerateToken();
 
        return redirect('/login');
    }
}
