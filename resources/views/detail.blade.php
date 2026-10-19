@extends('layouts.app')

@section('title', 'Detail ' . $craft->name)

@section('content')
<div class="container">
    <a href="{{ route('katalog') }}" class="btn btn-secondary mb-4">&laquo; Kembali ke Katalog</a>
    <div class="card shadow-sm border-0">
        <div class="row g-0">
            <div class="col-md-5">
                <img src="{{ asset('assets/images/' . $craft->image) }}" class="img-fluid rounded-start w-100 h-100" alt="{{ $craft->name }}" style="object-fit: cover; max-height: 400px;">
            </div>
            <div class="col-md-7">
                <div class="card-body p-4">
                    <h2 class="fw-bold">{{ $craft->name }}</h2>
                    <h4 class="text-success fw-bold my-3">Rp {{ number_format($craft->price, 0, ',', '.') }}</h4>
                    <table class="table table-borderless my-3">
                        <tr>
                            <td class="fw-bold text-muted" style="width: 130px;">Pengrajin</td>
                            <td>: {{ $craft->artisan }}</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-muted">Bahan Utama</td>
                            <td>: {{ $craft->material }}</td>
                        </tr>
                    </table>
                    <h6 class="fw-bold">Deskripsi Produk:</h6>
                    <p class="text-secondary">{{ $craft->description }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection