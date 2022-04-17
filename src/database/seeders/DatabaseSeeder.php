<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Marchendise;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        
        // Seed untuk user data admin
        User::create([
            'username' => 'admin123',
            'email' => "admin123@gamil.com",
            'password'=> bcrypt("admin123"),
            'is_admin' => true
        ]);

        // Seed untuk user data pembeli
        User::create([
            'username' => 'pembeli123',
            'email' => "pembeli123@gamil.com",
            'password'=> bcrypt("pembeli123"),
            'is_admin' => false
        ]);

        // Seed untuk data marchendise
        Marchendise::create([
            "nama" => "Anyaman Ketak",
            "jenis"=> "Anyaman",
            "deskripsi" => "Sesuai namanya Anyaman Ketak terbuat dari tanaman liar yang disebut ketak yang kemudian dianyam menjadi berbagai bentuk, seperti tatakan gelas, tas wanita, tempat perhiasan, aneka pajangan rumah, gentong, sampai meja hias. Anyaman ini berasal dari Desa Belaka, Kecamatan Praya Timur, Kabupaten Lombok Tengah",
            "harga" => 50000,
            "gambar" =>"anyaman_ketak.jpg"
        ]);

        Marchendise::create([
            "nama" => "Dodol Rumput Laut",
            "jenis"=> "Makanan",
            "deskripsi" => "Kebanyakan jenis dodol memang kenyal padat. Namun beda halnya dengan dodol rumput laut khas Lombok. Oleh-oleh asal Lombok punya keistimewaan lain yaitu tekstur lembutnya menyerupai jelly dan tidak lengket. Tampilannya yang tidak butek dan memiliki beragam warna, memberikan kesan tampilan yang memikat.",
            "harga" => 30000,
            "gambar" =>"dodol_rumput_laut.jpg"
        ]);

        Marchendise::create([
            "nama" => "Songket Sasak",
            "jenis"=> "Kain",
            "deskripsi" => "Kain Songket Sasak wajib kamu bawa pulang sebagai oleh-oleh khas Nusa Tenggara Barat! Menurut penduduk Pulau Lombok, kain tenun sangat berkaitan dengan banyak aspek dalam budaya mereka. Maka dari itu dulu  orang-orang Sasak sebagai penduduk asli melakukan ritual sebelum menenun kain yang populer juga sebagai buah tangan khas Lombok ini.",
            "harga" => 120000,
            "gambar" =>"kain_songket_sasak.jpg"
        ]);

        Marchendise::create([
            "nama" => "Mutiara Lombok",
            "jenis"=> "Perhiasan",
            "deskripsi" => "Nusa Tenggara Barat juga dikenal di masyarakat akan keindahan warna-warni mutiaranya. Pembudidaya dan pengrajin mutiara yang indah nan memikat ini biasa dijumpai di daerah Sekarbela yang terletak di Kota Mataram. Mutiara yang dihasilkan dapat berasal dari kerang air laut atau kerang budidaya di air tawar. Biasanya dari budidaya air tawar, mutiara tersebut berbentuk lonjong. Perbedaannya juga dengan mutiara air laut, mutiara air tawar memberikan pilihan warna yang bermacam-macam seperti hitam, biru, pink, putih, oranye, hijau, merah, dan kuning.",
            "harga" => 1000000,
            "gambar" =>"mutiara_lombok.jpg"
        ]);

        Marchendise::create([
            "nama" => "Kendi Maling",
            "jenis"=> "Kendi",
            "deskripsi" => "Kendi maling adalah kerajinan gerabah asli dari penduduk Desa Banyumelek yang berjarak sekitar 14 km dari Kota Mataram. Kendi Maling berbentuk layaknya kendi kebanyakan, hanya saja dibagian lehernya lebih panjang dan sempit sehingga membuat kesulitan untuk memasukkan air dari bagian atas kendi. Akhirnya kendi ini disebut maling karena untuk memasukkan airnya harus dari bagian bawah kendi, jadi seperti maling yang masuk lewat bawah, lalu keluar lewat atas.",
            "harga" => 275000,
            "gambar" =>"kendi_maling.jpg"
        ]);
        
    }
}
