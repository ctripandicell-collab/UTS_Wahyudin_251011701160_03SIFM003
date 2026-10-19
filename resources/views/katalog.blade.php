@extends('layouts.app')

@section('title', 'Katalog - Marketplace Kerajinan')

@section('content')
<div class="container">
    <h2 class="fw-bold mb-4">Katalog Kerajinan Lokal</h2>
    <div class="row">
        @foreach($crafts as $item)
            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <img src="{{ asset('assets/images/' . $item->image) }}" class="card-img-top" alt="{{ $item->name }}" style="height: 200px; object-fit: cover;">
                    
                    <div class="card-body">
                        <h6 class="card-title fw-bold text-truncate">{{ $item->name }}</h6>
                        <small class="text-muted d-block mb-2">Bahan: {{ $item->material }}</small>
                        <p class="fw-bold text-primary mb-0">Rp {{ number_format($item->price, 0, ',', '.') }}</p>
                    </div>
                    <div class="card-footer bg-white border-0 pb-3">
                        <a href="{{ route('detail', $item->id) }}" class="btn btn-outline-primary btn-sm w-100">View Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection