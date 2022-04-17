@extends('layouts.layout')

@section('content')  
    @if(session()->has('edit_profile_success'))
        <div class="container alert alert-success text-center mt-3" role="alert">
            {{ session('edit_profile_success')}}
        </div>
    @endif

    <div class="container mt-5">
        <h2 class="f-green f-20 f-bold">Profile</h2>
        <form action="/profile" method="POST" class="mt-4 w-75">
            @method('PUT')
            @csrf
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" name="username"  class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Masukkan username Anda" value="{{ $user->username }}">
              <div class="invalid-feedback"> @error('username') {{ $message }} @enderror</div>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" name="email"  class="form-control @error('username') is-invalid @enderror" id="email" placeholder="Masukkan email Anda" value="{{ $user->email}}">
              <div class="invalid-feedback"> @error('email') {{ $message }} @enderror</div>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Input Password (Jika kosong maka akan menggunakan password lama)" value="">
              <div class="invalid-feedback"> @error('password') {{ $message }} @enderror</div>
            </div>
            <div class="buttons mt-4">
              <button type="submit" class="btn btn-primary rounded-btn">Edit</button>
              <a href="{{ url()->previous() }}" class="btn btn-outline-primary rounded-btn">Kembali</a>
              <button type="button" class="btn btn-danger rounded-btn" data-bs-toggle="modal" data-bs-target="#logout">Logout</button>
            </div>
          </form>
    </div>

    <!-- Modal Logout -->
    <div class="modal fade" id="logout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Peringatan Logout</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Anda yakin ingin keluar ?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary rounded-btn" data-bs-dismiss="modal">Tidak</button>
            <form action="/logout" method="POST">
              @csrf
              <button type="submit" class="btn btn-danger rounded-btn">Keluar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  @endsection