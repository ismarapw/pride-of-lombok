@extends('layouts.layout')

@section('content')  
  <div class="container mt-5">
      <h2 class="f-green f-20 f-bold">Tambah Marchendise</h2>
      <!-- <div class="card">
        <img src="https://upload.wikimedia.org/wikipedia/commons/0/0a/No-image-available.png" class="card-img-top" alt="preview-gambar">
        <div class="card-body">
            <h5 class="card-title">Preview Nama</h5>
            <p class="card-text">Preview Jenis</p>
            <p class="card-price">Preview Harga</p>
        </div>
      </div> -->
      <form action="/tambah-marchendise" method="POST" class="mt-4 w-75" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label for="nama" class="form-label">Nama Barang</label>
            <input type="text" name="nama"  class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan nama barang barang" value="{{ old('nama') }}">
            <div class="invalid-feedback"> @error('nama') {{ $message }} @enderror</div>
          </div>
          <div class="mb-3">
            <label for="jenis" class="form-label">Janis Barang</label>
            <input type="text" name="jenis"  class="form-control @error('jenis') is-invalid @enderror" id="jenis" placeholder="Masukkan jenis barang" value="{{ old('jenis') }}">
            <div class="invalid-feedback"> @error('jenis') {{ $message }} @enderror</div>
          </div>
          <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi Barang</label>
            <textarea name="deskripsi" rows="3" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" placeholder="Masukkan deskripsi barang">{{ old('deskripsi') }}</textarea>
            <div class="invalid-feedback"> @error('deskripsi') {{ $message }} @enderror</div>
          </div>
          <div class="mb-3">
            <label for="harga" class="form-label">Harga Barang</label>
            <input type="number" min="1" name="harga" class="form-control @error('harga') is-invalid @enderror" id="harga" placeholder="Masukkan harga barang" value="{{ old('harga') }}">
            <div class="invalid-feedback"> @error('harga') {{ $message }} @enderror</div>
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label" for="gambar">Pilih Gambar</label>
            <input class="form-control @error('gambar') is-invalid @enderror" type="file" id="gambar" name="gambar" accept="image/*" >
            <div class="invalid-feedback"> @error('gambar') {{ $message }} @enderror</div>
          </div>
          <div class="buttons mt-4">
            <button type="submit" class="btn btn-primary rounded-btn">Tambah</button>
            <a href="{{ url()->previous() }}" class="btn btn-outline-primary rounded-btn">Kembali</a>
            <div class="invalid-feedback"> @error('') {{ $message }} @enderror</div>
          </div>
      </form>
    </div>
  @endsection

