// ambil field input jumlah
let input_jumlah = $("#jumlah");

input_jumlah.change(function () { 
    // ambil elemen total tagihan
    let total_tagihan = $("#total-tagihan");

    // ambil harga barang dengan regex (ex Rp.xxxx --> xxxx)
    let harga_barang = $("#harga-barang").html().match(/(\d+)/);

    // tampilkan pada elemen total tagihan hasil kali input jumlah dengan harga barang
    total_tagihan.html("Rp."+ parseInt(harga_barang)*parseInt(input_jumlah.val()));
});