@extends('layouts.app')

@section('title', 'Home - Marketplace Kerajinan')

@section('content')
<div class="container">
    <div class="p-5 mb-4 bg-white rounded-3 shadow-sm text-center border">
        <h1 class="display-5 fw-bold">Welcome To</h1>
        <h2 class="text-primary fw-bold mb-3">Marketplace Kerajinan</h2>
        <div class="my-3 p-3 bg-light rounded d-inline-block border">
            <p class="mb-1 fw-semibold">NIM: 251011701160</p>
            <p class="mb-1 text-muted">Prodi Sistem Informasi</p>
            <p class="mb-0 fw-bold text-dark">Wahyudin</p>
        </div>
    </div>

    <h3 class="fw-bold mb-3">Produk Unggulan</h3>
    <div class="row">
        @foreach($featuredCrafts as $item)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <img src="{{ asset('assets/images/' . $item->image) }}" class="card-img-top" alt="{{ $item->name }}" style="height: 220px; object-fit: cover;">
                    
                    <div class="card-body">
                        <h5 class="card-title fw-bold">{{ $item->name }}</h5>
                        <p class="card-text text-muted mb-1">Pengrajin: {{ $item->artisan }}</p>
                        <p class="card-text fw-bold text-success">Rp {{ number_format($item->price, 0, ',', '.') }}</p>
                    </div>
                    <div class="card-footer bg-white border-0 pb-3">
                        <a href="{{ route('detail', $item->id) }}" class="btn btn-primary w-100">View Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection