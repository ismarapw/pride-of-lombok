<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Marchendise;

class MarchendiseController extends Controller
{

    //--------------------------Role Pembeli----------------------------//

    // view halaman Home (daftar marchendise)
    public function index(){
        $marchendises = Marchendise::all();

        return view('marchendise.index', [
            'marchendises' => $marchendises,
            "title" => 'Home'
        ]);
    }


    // View halaman detail suatu Marchendise
    public function viewDetail($id){
        $marchendise = Marchendise::findOrFail($id);

        return view('marchendise.detailMarchendise', [
            'marchendise' => $marchendise,
            "title" => 'Detail'
        ]);
    }


    
    //----------------------------Role Admin------------------------------//

    // View halaman Admin
    public function admin(){
        $marchendises = Marchendise::all();

        return view('marchendise.admin', [
            'marchendises' => $marchendises,
            "title" => 'Admin'
        ]);
    }

    // View halaman Tambah Marchendise
    public function viewTambah(){
        return view('marchendise.tambahMarchendise',[
            "title"=>'Tambah Marchendise'
        ]);
    }

    // View halaman Edit Marchendise
    public function viewEdit($id){
        $marchendise = Marchendise::findOrFail($id);
        
        
        return view('marchendise.ubahMarchendise', [
            'marchendise' => $marchendise,
            "title"=>'Ubah Marchendise'
        ]);
    }
    
    // View halaman Hapus Marchendise
    public function viewHapus($id){
        $marchendise = Marchendise::findOrFail($id);

        return view('marchendise.hapusMarchendise', [
            'marchendise' => $marchendise,
            'title' => 'Hapus Marchendise'
        ]);
    }   

    // Fungsi tambah marchendise
    public function store(Request $request){
        // validasi data
        $validated_data = $request->validate([
            'nama' =>'required|max:128',
            'jenis' =>'required|max:128',
            'deskripsi' =>'required|max:5000',
            'harga' =>'required|integer|digits_between:1,20',
            'gambar' => 'required|mimes:jpg,bmp,png'
        ]);

        // Upload gambar 
        $file = $request->file('gambar');
        $file_name = $file->getClientOriginalName();
        $file->move(public_path('/images/marchendise/'), $file_name); 

        // Buat object data marchendise
        $marchendise = new Marchendise();

        $marchendise->nama = $validated_data['nama'];
        $marchendise->jenis = $validated_data['jenis'];
        $marchendise->deskripsi = $validated_data['deskripsi'];
        $marchendise->harga = $validated_data['harga'];
        $marchendise->gambar = $file_name;

        # save data
        $marchendise->save();

        return redirect('/admin')->with('tambah-success', "Marchendise berhasil ditambahkan");

    }
    
    // Fungsi Edit marchendise
    public function edit(Request $request, $id){
        // validasi data
        $validated_data = $request->validate([
            'nama' =>'required|max:128',
            'jenis' =>'required|max:128',
            'deskripsi' =>'required|max:5000',
            'harga' =>'required|integer|digits_between:1,20',
            'gambar' => 'mimes:jpg,bmp,png'
        ]);

        // get data saat ini
        $marchendise = Marchendise::findOrFail($id);

        // check gambar baru di upload atau tidak
        if(!($request->hasFile('gambar'))){ 
            // gunakan gambar lama
            $file_name = $marchendise->gambar;
        }else {
            // Upload gambar baru
            $file = $request->file('gambar');
            $file_name = $file->getClientOriginalName();
            $file->move(public_path('/images/marchendise/'), $file_name); 
        }


        // Update data
        $marchendise->nama = $validated_data['nama'];
        $marchendise->jenis = $validated_data['jenis'];
        $marchendise->deskripsi = $validated_data['deskripsi'];
        $marchendise->harga = $validated_data['harga'];
        $marchendise->gambar = $file_name;

        //  save data
        $marchendise->save();

        return redirect('/admin')->with('edit-success', "Marchendise berhasil diubah");

    }

    // Fungsi Hapus marchendise
    public function destroy($id){
        // caru marchendise yang ingin dihapus
        $marchendise = Marchendise::findOrFail($id);

        // hapus marchendise
        $marchendise->delete();

        return redirect('/admin')->with('hapus-success', 'Marchendise berhasil dihapus');
    }

}
