<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;


class RegisterController extends Controller
{
    public function index(){
        return view('daftar');
    }

    public function store(Request $request){
        $validated_data = $request->validate([
            'username' => 'required|max:255|unique:users,username',
            'email' => 'required|unique:users,email|email:dns',
            'password'=> 'required|min:5|max:255'
        ]);
        
        $validated_data['password'] =  bcrypt($validated_data['password']);

        User::create($validated_data);

        return redirect('/login')->with('success', "Registrasi berhasil, silahkan login");

    }
}
