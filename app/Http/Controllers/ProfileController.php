<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use SebastianBergmann\Environment\Console;

class ProfileController extends Controller
{
    // View halaman profile
    public function index(){
        // Ambil identitas user yang ter-loggin
        $user_logged = Auth::user();

        return view ('profile.profile', [
            'user' => $user_logged,
            "title" => 'Profile'
        ]);

    }


    // Fungsi edit profile 
    public function edit(Request $request){

        // ambil user id yang ter-loggin
        $id_user_logged = Auth::user()->id;
        
        // validasi username dan email
        $request->validate([
            'username' => 'required|max:255|unique:users,username,'.$id_user_logged ,
            'email' => 'required|email:dns|unique:users,email,'.$id_user_logged 
        ]);
        
        // Cek nilai password
        if(is_null($request->password)){
            // kalau input kosong pakai password lama
            $new_password = Auth::user()->password;
        }else {
            // kalau input ada, pakai passoword baru tapi minimal 5 dan maximal 255 
            $request->validate([
                'password'=> 'min:5|max:255'
            ]);

            $new_password = bcrypt($request->password);
        }

        // edit data user sesuai input
        $user = User::findOrFail($id_user_logged);

        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = $new_password;

        // simpan di DB
        $user->save();

        return redirect('/profile')->with('edit_profile_success', 'Edit profile berhasil');
    }
}
