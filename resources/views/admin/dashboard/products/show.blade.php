@extends('layouts.dashboard')

@section('title', 'Detail Produk')

@section('content')
<div class="container">
    <h1>Detail Produk</h1>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            @if($product->image)
            <div class="col-md-4">
                <img src="{{ asset('storage/'.$product->image) }}" class="img-fluid rounded-start" alt="Gambar Produk">
            </div>
            @endif
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ $product->description }}</p>
                    <p class="card-text"><strong>Harga:</strong> Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                    <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                    <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
