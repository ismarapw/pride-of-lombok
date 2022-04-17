@extends('layouts.layout')

@section('content')  
    <section class="mt-5 pb-5">
        <div class="container">
            <div class="page-title">
                <h2 class="f-green f-20 f-bold">Daftar Pesanan Masuk</h2>
            </div>
            <div class="list-order mt-5">
                @foreach($semua_pesanan as $pesanan)
                <div class="order mb-5">
                    <p class="f-black">{{$loop->iteration}}. {{$pesanan->username}} ({{$pesanan->created_at}} ) </p>
                    <div class="ordered d-flex">
                        <div class="image-wrapper flex-shrink-0 d-flex justify-content-center align-items-center">
                            <img src="/images/marchendise/{{$pesanan->gambar}}" alt="" class="img-order">
                        </div>
                        <div class="detail-order flex-grow-1 ms-sm-5 ms-3">
                            <h2 class="f-black f-20 f-bold">{{$pesanan->nama}} </h2>
                            <p class="f-black">{{$pesanan->jumlah_dibeli}} barang </p>
                            <p class="f-orange f-medium f-20">Rp.{{$pesanan->total_tagihan}} </p>
                            <p class="f-black address">Dikirim ke {{$pesanan->alamat}} </p>
                            <p class="f-black">Dibayar via {{$pesanan->metode_bayar}} </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section>
@endsection
