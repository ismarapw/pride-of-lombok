<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;


class RegisterController extends Controller
{
    // View halaman register
    public function index(){
        return view('register.daftar'); 
    }
    
    // Fungsi registrasi user
    public function store(Request $request){
        // Validasi data
        $validated_data = $request->validate([
            'username' => 'required|max:255|unique:users,username',
            'email' => 'required|unique:users,email|email:dns',
            'password'=> 'required|min:5|max:255'
        ]);
        
        // Enkripsi password
        $validated_data['password'] =  bcrypt($validated_data['password']);
        
        // Buat user baru 
        User::create($validated_data);

        return redirect('/login')->with('success', "Registrasi berhasil, silahkan login");

    }
}
