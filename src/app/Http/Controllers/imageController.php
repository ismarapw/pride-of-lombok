<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
class imageController extends Controller
{

    public function index(){
        $data['respond'] = Session::get("respon");
        Session::put("respon","");
        return view("form",$data);
        
    }

    public function store(Request $req){
        $req -> validate(['image' => 'max:500|mimes:jpg']);


        if($file = $req->hasFile('image')){
            $file = $req -> file('image');
            $fileName = $file -> getClientOriginalName();
            $destinationPath = public_path().'/images';
            $file->move($destinationPath,$fileName);
            $resp = "Upload berhasil !";
            Session::put("respon",$resp);
            return redirect()->action([imageController::class,'index']);
            
        }
    }
}
