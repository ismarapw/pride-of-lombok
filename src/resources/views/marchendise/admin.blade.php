@extends('layouts.layout')

@section('content')
    @if(session()->has('tambah-success'))
        <div class="container alert alert-success text-center mt-3" role="alert">
            {{ session('tambah-success')}}
        </div>
    @endif

    @if(session()->has('edit-success'))
        <div class="container alert alert-success text-center mt-3" role="alert">
            {{ session('edit-success')}}
        </div>
    @endif

    @if(session()->has('hapus-success'))
        <div class="container alert alert-success text-center mt-3" role="alert">
            {{ session('hapus-success')}}
        </div>
    @endif

    <section class="mt-5 pb-5">
        <div class="container">
            <div class="page-title">
                <div class="d-flex align-items-center">
                    <h2 class="mt-1 f-green f-20 f-bold">Atur Marchendise</h2>
                    <a class="ms-4 btn btn-primary rounded-btn d-flex" href="/tambah-marchendise">
                        <i class="ri-add-line" style="margin-top:-2px; font-size:20px;"></i>
                        <span style="margin-top:2px;">Tambah</span>
                    </a>
                </div>
            </div>
            <div class="list-items mt-5">
                <div class="row gy-5 row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 row-cols-xl-5">
                    @foreach($marchendises as $marchendise)
                    <div class="col">
                        <div class="card">
                            <img src="{{'/images/marchendise/'.$marchendise->gambar}} " class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title">{{ $marchendise->nama }}</h5>
                                <p class="card-text">{{ $marchendise->jenis }}</p>
                                <p class="card-price">Rp.{{ $marchendise->harga }}</p>
                            </div>
                            <div class="action d-flex flex-column justify-content-center align-items-center">
                                <a href="{{'ubah-marchendise/'.$marchendise->id}} " class="btn btn-primary rounded-btn" style="width: 120px;">Ubah</a>
                                <a href="{{'hapus-marchendise/'.$marchendise->id}} " class="btn btn-danger rounded-btn mt-2" style="width: 120px;">Hapus</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                   
                </div>
            </div>

        </div>
    </section>
@endsection
