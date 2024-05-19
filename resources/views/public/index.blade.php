@extends('template.main')
@section('content')

<div class="container">
    <div class="row col-lg-12">
        <div class="col-lg-3">
        </div>
        <div class="col-lg-6 text-center my-5">
            <img src="/logo.png" alt="Logo Aplikasi" width="300"> <!-- Ganti '/logo.png' sesuai dengan path file gambar Anda -->
            <h1>Aplikasi Pemesanan Tiket Konser</h1>
            <p>Klik tombol Pesan Tiket</p>
            <a class="btn btn-primary" href="/tiket">Pesan Tiket</a>
        </div>
        <div class="col-lg-3">
        </div>
    </div>
</div>

@endsection
