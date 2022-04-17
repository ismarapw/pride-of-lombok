@extends('layouts.layout')

@section('content')

<div class="container mt-4">
    <h2 class="f-green f-20 f-bold">Marchendise Favorit</h2>
    <div class="list-items mt-4">
        <div class="row gy-5 row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 row-cols-xl-5">
            @foreach($marchendise_favorit as $marchendise)
            <div class="col">
                <div class="card">
                    <img src="{{'images/marchendise/'.$marchendise->gambar}}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{ $marchendise->nama }}</h5>
                        <p class="card-text">{{ $marchendise->jenis }}</p>
                        <p class="card-price">Rp.{{ $marchendise->harga }}</p>
                    </div>
                    <div class="action d-flex flex-column justify-content-center align-items-center">
                        <a href="detail-marchendise/{{ $marchendise->merch_id }}" class="btn btn-primary rounded-btn"  style="width: 120px;">Lihat</a>
                        <form action="/favorit/hapus/{{$marchendise->fav_id}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-light rounded-btn mt-2"  style="width: 120px;">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        
        </div>
    </div>
</div>


@endsection
