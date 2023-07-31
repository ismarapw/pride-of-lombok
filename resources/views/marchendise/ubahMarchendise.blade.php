@extends('layouts.layout')

@section('content')  
  <div class="container mt-5">
      <h2 class="f-green f-20 f-bold">Ubah Marchendise</h2>
      <div class="img-preview" >
        <img style="height:300px; object-fit:contain;" src="/images/marchendise/{{$marchendise->gambar}}" alt="">
      </div>
      <form action="/ubah-marchendise/{{ $marchendise->id }}"  method="POST" class="mt-4 w-75" enctype="multipart/form-data">
          @csrf
          @method('put')
          <div class="mb-3">
            <label for="nama" class="form-label">Nama Barang</label>
            <input type="text" name="nama"  class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan nama barang barang" value="{{ $marchendise->nama }}" >
            <div class="invalid-feedback"> @error('nama') {{ $message }} @enderror</div>
          </div>
          <div class="mb-3">
            <label for="jenis" class="form-label">Janis Barang</label>
            <input type="text" name="jenis"  class="form-control @error('jenis') is-invalid @enderror" id="jenis" placeholder="Masukkan jenis barang" value="{{ $marchendise->jenis}}" >
            <div class="invalid-feedback"> @error('jenis') {{ $message }} @enderror</div>
          </div>
          <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi Barang</label>
            <textarea name="deskripsi" rows="3" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" placeholder="Masukkan deskripsi barang" >{{ $marchendise->deskripsi }}</textarea>
            <div class="invalid-feedback"> @error('deskripsi') {{ $message }} @enderror</div>
          </div>
          <div class="mb-3">
            <label for="harga" class="form-label">Harga Barang</label>
            <input type="text" name="harga"  class="form-control @error('harga') is-invalid @enderror" id="harga" placeholder="Masukkan harga barang" value="{{ $marchendise->harga}}" >
            <div class="invalid-feedback"> @error('harga') {{ $message }} @enderror</div>
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label" for="gambar">Pilih Gambar</label>
            <input class="form-control @error('gambar') is-invalid @enderror" type="file" id="gambar" name="gambar" accept="image/*">
            <div class="invalid-feedback"> @error('gambar') {{ $message }} @enderror</div>
          </div>
          <div class="buttons mt-4">
            <button type="submit" class="btn btn-primary rounded-btn">Ubah</button>
            <a href="/admin" class="btn btn-outline-primary rounded-btn">Kembali</a>
          </div>
      </form>
  </div>
@endsection
