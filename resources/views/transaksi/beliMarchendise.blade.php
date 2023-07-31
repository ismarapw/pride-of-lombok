@extends('layouts.layout')

@section('content')  
  <!-- Isi -->
  <div class="container mt-5">
        <div class="judul">
            <h2 class="f-green f-20 f-bold">Beli Langsung</h2>
        </div>
        <div class="d-flex mt-5 flex-sm-column flex-column flex-md-column flex-lg-row">     
          <div class="kotak">
              <div class="image-wrapper image-wrapper-big d-flex justify-content-center align-items-center">
                  <img src="/images/marchendise/{{ $marchendise->gambar }}" alt="" class="img-order">
              </div>
          </div>
          
          <div class="pembayaran ms-0 ms-sm-0 ms-md-5 mt-5 mt-sm-5 mt-md-0 w-75">
            <div class="deskrip">
                <h2 class="f-bold f-24 mb-3">{{ $marchendise->nama }}</h2>
                <h3 class="f-semi-bold f-22" id="harga-barang">Rp.{{ $marchendise->harga}}</h3>
            </div>
            <form action="/beli-marchendise/{{$marchendise->id}}" method="POST">
                  @csrf
                  <div class="mb-3">
                    <label for="jumlah" class="form-label">Jumlah</label>
                    <input type="number" min = "1" value="1" name="jumlah" class="form-control @error('jumlah') is-invalid @enderror" style="width: 75px;" id="jumlah" ">
                    <div class="invalid-feedback"> @error('jumlah') {{ $message }} @enderror</div>
                  </div>
                  <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea type="text" name="alamat" rows="3" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="Masukkan Alamat Anda">{{old('alamat') }}</textarea>
                    <div class="invalid-feedback"> @error('alamat') {{ $message }} @enderror</div>
                  </div>
                  <div class="mb-3">
                    <label for="metode" class="form-label">Metode Pembayaran</label>
                    <select class="form-select @error('metode') is-invalid @enderror" id="metode" name="metode" aria-label="Default select example">
                      <option selected value="">Pilih metode Pembayaran</option>
                      <option value="Go-pay">Go-Pay</option>
                      <option value="OVO">OVO</option>
                      <option value="Bank Mandiri">Bank Mandiri</option>
                      <option value="Bank BCA">Bank BCA</option>
                    </select>
                    <div class="invalid-feedback"> @error('metode') {{ $message }} @enderror</div>
                  </div>
                  <div class="mb-3">
                    <p class="f-grey">Total Tagihan <span class="f-orange f-22 ms-3 f-semi-bold" id="total-tagihan">Rp.{{ $marchendise->harga}}</span></p>
                  </div>
                  <div class="buttons">
                    <button type="submit" class="btn btn-primary rounded-btn">Bayar</button>
                  </div>
              </form>
          </div>
        </div>
  </div>

@endsection
