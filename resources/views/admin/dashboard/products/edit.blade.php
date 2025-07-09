@extends('layouts.dashboard')

@section('title', 'Edit Produk')

@section('content')
<div class="container">
    <h1>Edit Produk</h1>
    <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Nama Produk</label>
            <input type="text" name="name" class="form-control" required value="{{ old('name', $product->name) }}">
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="description" class="form-control">{{ old('description', $product->description) }}</textarea>
        </div>
        <div class="mb-3">
            <label>Harga</label>
            <input type="number" name="price" class="form-control" required value="{{ old('price', $product->price) }}">
        </div>
        <div class="mb-3">
            <label>Gambar</label>
            @if($product->image)
                <div class="mb-2">
                    <img src="{{ asset('storage/'.$product->image) }}" width="120" alt="Gambar Produk">
                </div>
            @endif
            <input type="file" name="image" class="form-control">
            <small class="text-muted">Kosongkan jika tidak ingin mengubah gambar.</small>
        </div>
        <button class="btn btn-primary">Update</button>
        <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
