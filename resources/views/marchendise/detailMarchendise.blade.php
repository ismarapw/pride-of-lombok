@extends('layouts.layout')

@section('content')

    @if(session()->has('sudah_ada'))
        <div class="container alert alert-danger text-center mt-3" role="alert">
            {{ session('sudah_ada')}}
        </div>
    @endif

    @if(session()->has('berhasil_ditambah'))
        <div class="container alert alert-success text-center mt-3" role="alert">
            {{ session('berhasil_ditambah')}}
        </div>
    @endif
    <div class="container mt-5">
        <div class="page-title">
            <h2 class="f-green f-20 f-bold">Detail Barang</h2>
        </div>
        <div class="d-flex flex-sm-column flex-md-column flex-lg-row flex-column mt-5">
            <div class="item">
                <div class="image-wrapper image-wrapper-big d-flex justify-content-center align-items-center">
                    <img src="/images/marchendise/{{ $marchendise->gambar }}" alt="" class="img-order">
                </div>
                <div class="buttons">
                    <a href="/beli-marchendise/{{$marchendise->id}}" class="btn btn-primary rounded-btn mt-3" style="display: block;">+ Beli Merchandise</a>
                    <form action="/favorit/tambah/{{$marchendise->id}}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-outline-primary rounded-btn mt-3" style="display: block;">Tambah ke Favorit</button>
                    </form>
                </div>
            </div>
            <div class="item-info w-75 mt-sm-4 mt-4 mt-lg-0 ms-0 ms-lg-5">
                <h2 class="f-bold f-24">{{ $marchendise->nama }}</h2>
                <p class="f-grey">{{ $marchendise->jenis }}</p>
                <h3 class="f-semi-bold f-22">Rp.{{ $marchendise->harga }}</h3>
                <h5 class="f-green">Deskripsi</h5>
                <p> {{ $marchendise->deskripsi}}
                </p>
            </div>        
        </div>
    </div>
@endsection 