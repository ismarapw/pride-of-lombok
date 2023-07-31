<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    // Fungsi search untuk AJAX
    public function liveSearch(Request $request){

        // Cek apakah request adalah ajax dan cek juga inputan user
        if($request->ajax() and $request->input != ""){
            
            // ambil input user dari client
            $input = $request->input;

            // Temukan barang dari inputan
            $barang_dicari =  DB::select("select * from marchendise where nama like '%$input%' or jenis like '%$input%'"); 


            // cek apakah barang ditemukan
            if($barang_dicari == true){
                // jika barang ditemukan, buat output dan jadikan sebagai halaman html
                $output = '';  
                foreach($barang_dicari as $barang){
                    $output = $output.
                    "<a href='/detail-marchendise/$barang->id' class = 'list-finding d-flex px-3 py-1'>
                        <img src='images/marchendise/$barang->gambar' alt='' style = 'width:40px; height:40px; border-radius:50%; object-fit:contain; border:1px solid #CCCCCC'>
                        <div class = ms-3>
                            <p style = 'color:#333; margin-bottom:0'>".$barang->nama."</p>
                            <p style = 'color:#969696;'>Rp.".$barang->harga."</p>
                        </div>
                    </a>";
            
                }
                
            } else {
                // jika barang tidak ditemukan, beri pesan
                $output = "<div class = 'p-3'>barang tidak ditemukan :(</div>";
            }

            // return data ke client JS
            return response($output);
        }
    }
}
