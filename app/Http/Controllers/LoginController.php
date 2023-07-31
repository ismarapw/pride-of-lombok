<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // View halaman Login
    public function index(){
        return view('login.login');
    }
    
    // Fungsi autentikasi Login
    public function auth(Request $request){
        // Cek input value 
        $credentials =  $request->validate([
            'username' =>'required',
            'password' =>'required',
        ]); 
        
        // Cek kesesuaian username dan password 
        if (Auth::attempt($credentials)) {
            // Buat session baru 
            $request->session()->regenerate();

            // Cek role User
            if(Auth::user() &&  Auth::user()->is_admin == 1){
                // Jika role user admin maka akan kehalaman admin
                return redirect('/admin');
            }else {
                // Jika role user bukan admin maka akan kehalaman home(daftar marchnedise)
                return redirect('/');
            }
        }

        // Jika username dan password tidak sesuai kembalikan ke halaman login dan beri pesan
        return redirect('/login')->with('invalid', 'username atau password salah');
        
    }

    // Fungsi Autentikasi Logout
    public function logout(Request $request){
        // Logout-kan user
        Auth::logout();
        
        // Hapus session 
        $request->session()->invalidate();
        
        // Buat token baru
        $request->session()->regenerateToken();
 
        return redirect('/login');
    }
}
