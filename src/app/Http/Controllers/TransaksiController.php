<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Marchendise;
use App\Models\Pesanan;
use Illuminate\Support\Facades\Auth;

class TransaksiController extends Controller
{

    //--------------------------Role Pembeli----------------------------//

    
    // View halaman beli suatu Marchendise
    public function viewBeli($id){
        $marchendise = Marchendise::findOrFail($id);

        return view('transaksi.beliMarchendise', [
            'marchendise' => $marchendise,
            "title" => 'Beli Marchendise'
        ]);
    }

    // Fungsi membuat pesanan dari suatu marchendise
    public function store(Request $request, $id){
        
        // Validasi pesanan
        $validated_data = $request->validate([
            'jumlah' => "required",
            "alamat" => 'required|max:512',
            "metode" => 'required|max:128'
        ]);
        
        
        // ambil harga barang yang dipesan dari tabel barang
        $harga_marchendise = Marchendise::findOrFail($id)->harga;
        
        // buat pesanan baru
        $pesanan = new Pesanan();
        $pesanan->user_id = Auth::user()->id;
        $pesanan->marchendise_id = $id;
        $pesanan->jumlah_dibeli = $validated_data['jumlah'];
        $pesanan->total_tagihan = $pesanan->jumlah_dibeli * $harga_marchendise;
        $pesanan->alamat = $validated_data['alamat'];
        $pesanan->metode_bayar = $validated_data['metode'];
        
        // save pesanan ke tabel pesanan
        $pesanan->save();

        return redirect('/')->with('pesanan_success', 'Marchendise berhasil di order');        
    }


    // view daftar barang yang dibeli
    public function viewDaftarPembelian(){
        //  ambil id user
        $user_id = Auth::user()->id;

        // ambil barang yang dipesan user dari tabel pesanan
        $barang_dibeli = DB::select(
            "select pesanan.created_at,pesanan.jumlah_dibeli, 
            pesanan.total_tagihan, pesanan.alamat, pesanan.metode_bayar,
            marchendise.nama, marchendise.gambar from pesanan, marchendise 
            where pesanan.user_id = $user_id and 
            pesanan.marchendise_id = marchendise.id
            order by pesanan.created_at DESC"
        );


        // Return view dan kirim hasil query barang yang dipesan
        return view('transaksi.daftarPembelian', [
            'barang_dibeli' => $barang_dibeli,
            "title" => 'Daftar yang Dibeli'
        ]);
    }
    

    //----------------------------Role Admin------------------------------//

    // view daftar pesanan yang masuk
    public function viewPesananUser(){
        // ambil semua pesanan dari tabel pesanan
        $semua_pesanan = DB::select(
            "select pesanan.created_at, 
            pesanan.jumlah_dibeli, 
            pesanan.total_tagihan, 
            pesanan.alamat, 
            pesanan.metode_bayar,
            marchendise.nama,
            marchendise.gambar,
            users.username from pesanan, users, marchendise
            where pesanan.marchendise_id = marchendise.id and pesanan.user_id = users.id order by pesanan.created_at DESC"
        );

        // return view dan kirim hasil query dari semua pesanan
        return view('transaksi.daftarPesanan', [
            'semua_pesanan' => $semua_pesanan,
            "title" => 'Pesanan Masuk'
        ]);
    }
}
