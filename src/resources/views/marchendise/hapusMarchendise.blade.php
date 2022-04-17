@extends('layouts.layout')

@section('content')
    <div class="container mt-5">
        <div class="page-title">
            <h2 class="f-green f-20 f-bold">Hapus Barang</h2>
        </div>
        <div class="d-flex flex-sm-column flex-md-column flex-lg-row flex-column mt-5">
            <div class="item">
                <div class="image-wrapper image-wrapper-big d-flex justify-content-center align-items-center">
                    <img src="/images/marchendise/{{ $marchendise->gambar }}" alt="" class="img-order">
                </div>
                <button type="button" class="btn btn-outline-danger rounded-btn mt-3 w-100" data-bs-toggle="modal" data-bs-target="#delete">Hapus Barang</button>
            </div>
            <div class="item-info w-75 mt-sm-4 mt-4 mt-lg-0 ms-0 ms-lg-5">
                <h2 class="f-bold f-24">{{ $marchendise->nama }}</h2>
                <p class="f-grey">{{ $marchendise->jenis }}</p>
                <h3 class="f-semi-bold f-22">Rp.{{ $marchendise->harga }}</h3>
                <h5 class="f-green">Deskripsi</h5>
                <p> {{ $marchendise->deskripsi }}
                </p>
            </div>        
        </div>
    </div>

    <!-- Modal Logout -->
    <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Peringatan Hapus</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Anda yakin ingin menghapus barang ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary rounded-btn" data-bs-dismiss="modal">Tidak</button>
                <form action="/hapus-marchendise/{{ $marchendise->id }}" method="POST">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger rounded-btn">Hapus</button>
                </form>
            </div>
            </div>
        </div>
    </div>
@endsection
