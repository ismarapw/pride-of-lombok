<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Favorit;

class FavoritController extends Controller
{
    // View halaman favorit
    public function index(){
        // Ambil id user yang terloggin
        $id_user = Auth::user()->id;

        // ambil barang favorit user
        $favorit = DB::select(
            "select marchendise.id as merch_id, marchendise.nama, 
             marchendise.jenis, marchendise.harga, marchendise.gambar,favorit.id as fav_id
             from favorit, marchendise, users 
             where favorit.user_id = users.id and 
             favorit.marchendise_id = marchendise.id and 
             favorit.user_id = $id_user"
        );

        return view("favorit.favorit" ,[
            "marchendise_favorit" => $favorit,
            "title" => "Favorit"
        ]);
    }


    // fungsi tambah banang ke favorit ($id --> id barang)
    public function store($id){

        // Ambil id user yang terloggin
        $id_user = Auth::user()->id;

        // Ambil id barang
        $id_barang = $id;

        // Cek apakah barang sudah ditambahkan atau belum oleh user
        $barang_favorit = DB::select("select id from favorit where user_id = $id_user and marchendise_id = $id_barang");

        if($barang_favorit == true){
            // jika barang sudah ada di favorit kembalikan ke halaman detail dan beri pesan
            return redirect("/detail-marchendise/$id_barang")->with('sudah_ada', "Barang sudah ada di favorit");
        }else{
            //  jika barang belum ada di favorit, insert-kan barang menjadi favorit

            // Buat object favorit
            $new_fav = new Favorit();

            $new_fav->user_id = $id_user;
            $new_fav->marchendise_id = $id_barang;

            // insert ke database (save)
            $new_fav->save();

            return redirect("/detail-marchendise/$id")->with('berhasil_ditambah', "Barang berhasil ditambahakan ke favorit");
        }        
    }

    // fungsi hapus barang dari favorit($id --> id favorit)
    public function destroy($id){

        // caru barang favorit yang ingin dihapus
        $fav = Favorit::findOrFail($id);

        // hapus marchendise
        $fav->delete();

        return redirect("/favorit");
    }

}
