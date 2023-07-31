@extends('layouts.layout')

@section('content')    
    @if(session()->has('not_permit'))
        <div class="container alert alert-danger text-center mt-3" role="alert">
            {{ session('not_permit')}}
        </div>
    @endif

    @if(session()->has('pesanan_success'))
        <div class="container alert alert-success text-center mt-3" role="alert">
            {{ session('pesanan_success')}}
        </div>
    @endif

    
    <section class="welcome py-5">
        <div class="container">
            <div class="welcoming-text">
                <h1 class="f-24 f-black f-bold">Dapatkan Marchendise Khas Lombok.</h1>
                <p class="f-grey">Jadikan barang-barang khas lombok sebagai oleh - oleh mu.</p>
            </div>
            <div class="input-group search">
                <input id="input-search" type="search" class="form-control rounded" placeholder="Cari barang disini..." aria-label="Search" aria-describedby="search-addon" />
                <button type="button" class="btn btn-primary"><i class="ri-search-line"></i></button>
            </div>
            <div id="hasil-cari">
            </div>
        </div>
    </section>

    <section class="mt-5 pb-5">
        <div class="container">
            <div class="page-title">
                <h2 class="f-green f-20 f-bold">Daftar Marchendise</h2>
            </div>
            <div class="list-items mt-4">
                <div class="row gy-5 row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 row-cols-xl-5">

                    @foreach($marchendises as $marchendise)
                    <div class="col">
                        <div class="card">
                            <img src="{{'images/marchendise/'.$marchendise->gambar}}" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title">{{ $marchendise->nama }}</h5>
                                <p class="card-text">{{ $marchendise->jenis }}</p>
                                <p class="card-price">Rp.{{ $marchendise->harga }}</p>
                            </div>
                            <div class="action d-flex justify-content-center align-items-center">
                                <a href="detail-marchendise/{{ $marchendise->id }}" class="btn btn-primary rounded-btn">Lihat</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                
                </div>
            </div>

        </div>
    </section>

@endsection

