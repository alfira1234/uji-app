@extends('layouts.main')

@section('navbar')
<h1> Halaman Paket Wisata</h1> 


@foreach ($fasilitas as $item)
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="img/kambing.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">{{ $item->judul }}</h5>
                <p class="card-text">{{ $item->harga }}</p>
                <a href="/fasilitas" class="btn btn-primary">Lihat lebih detail</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection