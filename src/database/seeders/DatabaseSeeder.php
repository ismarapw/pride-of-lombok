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

        Marchendise::create([
            "nama" => "Songket Sasak",
            "jenis" => "Kain Tenun",
            "deskripsi" => "Songket adalah kain tenun khas Lombok yang indah dan dihiasi dengan motif tradisional yang rumit. Songket biasanya digunakan untuk pakaian adat dan acara-acara istimewa.",
            "harga" => 500000,
            "gambar" =>"songet_sasak_1.jpg"
        ]);

        Marchendise::create([
            "nama" => "Ikat Lombok",
            "jenis" => "Kain Tenun",
            "deskripsi" => "Ikat Lombok adalah kain tenun dengan motif unik yang dihasilkan dari teknik ikat benang sebelum dijadikan kain. Ikat Lombok terkenal karena keindahannya.",
            "harga" => 400000,
            "gambar" =>"ikat_lombok.jpg"
        ]);
        
        Marchendise::create([
            "nama" => "Sasak Pottery",
            "jenis" => "Kerajinan Gerabah",
            "deskripsi" => "Kerajinan gerabah khas Lombok yang indah dan beragam. Dari vas bunga hingga barang rumah tangga lainnya, kerajinan gerabah Lombok menjadi pilihan yang menarik sebagai oleh-oleh.",
            "harga" => 150000,
            "gambar" =>"sasak_pottery.jpg"
        ]);

        Marchendise::create([
            "nama" => "Sarung Tenun",
            "jenis" => "Pakaian",
            "deskripsi" => "Sarung tenun adalah pakaian tradisional Lombok yang terbuat dari kain tenun yang indah dan berwarna-warni. Sarung tenun sering digunakan dalam acara adat dan perayaan.",
            "harga" => 250000,
            "gambar" =>"tenun_lombok.jpg"
        ]);

        Marchendise::create([
            "nama" => "Gula Aren",
            "jenis" => "Makanan",
            "deskripsi" => "Gula aren adalah pemanis alami yang dihasilkan dari nira pohon aren. Rasanya manis dan lezat, cocok untuk dicampurkan dalam minuman atau makanan.",
            "harga" => 75000,
            "gambar" =>"gula_aren.jpg"
        ]);

        Marchendise::create([
            "nama" => "Ampenan Cake",
            "jenis" => "Makanan",
            "deskripsi" => "Ampenan Cake adalah kue tradisional Lombok yang lezat dan kenyal. Rasanya manis dengan aroma pandan yang khas.",
            "harga" => 30000,
            "gambar" =>"ampenan_kue.jpg"
        ]);

        Marchendise::create([
            "nama" => "Keripik Rumput Laut",
            "jenis" => "Makanan",
            "deskripsi" => "Keripik rumput laut adalah camilan khas Lombok yang renyah dan gurih. Dibuat dari rumput laut pilihan, keripik ini menjadi oleh-oleh yang lezat.",
            "harga" => 50000,
            "gambar" =>"kripik_laut.jpg"
        ]);

        Marchendise::create([
            "nama" => "Topeng Sasak",
            "jenis" => "Kerajinan",
            "deskripsi" => "Topeng Sasak adalah kerajinan tangan dari kayu yang menggambarkan karakter-karakter tradisional Lombok. Topeng ini sering digunakan dalam tarian dan upacara adat.",
            "harga" => 120000,
            "gambar" =>"topeng_sasak.jpg"
        ]);

        Marchendise::create([
            "nama" => "Brem Lombok",
            "jenis" => "Makanan",
            "deskripsi" => "Brem Lombok adalah kue tradisional yang terbuat dari tape ketan dengan rasa manis dan khas. Cocok sebagai oleh-oleh atau camilan.",
            "harga" => 45000,
            "gambar" =>"brem_lombok.jpg"
        ]);

        Marchendise::create([
            "nama" => "Selong Belanak Painting",
            "jenis" => "Seni Lukis",
            "deskripsi" => "Lukisan Selong Belanak menggambarkan keindahan pantai Selong Belanak yang indah. Lukisan ini menjadi kenangan yang indah dari liburan di Lombok.",
            "harga" => 200000,
            "gambar" =>"selong_art.jpeg"
        ]);

        Marchendise::create([
            "nama" => "Banyumulek Pottery",
            "jenis" => "Kerajinan Gerabah",
            "deskripsi" => "Banyumulek Pottery adalah kerajinan gerabah dari desa Banyumulek. Barang-barang kerajinan ini unik dan berkualitas tinggi.",
            "harga" => 180000,
            "gambar" =>"Banyumulek Pottery.jpg"
        ]);

        Marchendise::create([
            "nama" => "Perang Topat",
            "jenis" => "Makanan",
            "deskripsi" => "Perang Topat adalah makanan tradisional Lombok yang terbuat dari ketan dan kelapa parut. Biasanya disajikan dalam acara perayaan.",
            "harga" => 30000,
            "gambar" =>"topat.jpeg"
        ]);

        Marchendise::create([
            "nama" => "Kain Endek",
            "jenis" => "Kain Tenun",
            "deskripsi" => "Endek Lombok adalah kain tenun dengan motif khas dan warna-warna cerah. Kain ini sering digunakan untuk pakaian adat.",
            "harga" => 350000,
            "gambar" =>"kain_endek.jpg"
        ]);

        Marchendise::create([
            "nama" => "Sate Rembiga",
            "jenis" => "Makanan",
            "deskripsi" => "Sate Rembiga adalah makanan khas Lombok berupa sate ayam dengan bumbu kacang yang khas. Rasanya lezat dan menggugah selera.",
            "harga" => 40000,
            "gambar" =>"sate_rembiga.jpg"
        ]);

        Marchendise::create([
            "nama" => "Lombok Coffee",
            "jenis" => "Minuman",
            "deskripsi" => "Kopi Lombok terkenal dengan cita rasa yang khas. Biji kopi dipetik dan diproses secara tradisional, menghasilkan kopi berkualitas tinggi.",
            "harga" => 80000,
            "gambar" =>"lombok_coffe.jpg"
        ]);
        
    }
}
