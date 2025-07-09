@extends('layouts.dashboard')

@section('title', 'Edit Artikel')

@section('content')
<div class="container">
    <h1>Edit Artikel</h1>
    <form action="{{ route('admin.articles.update', $article->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <!-- Title -->
        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" name="title" class="form-control" required value="{{ old('name', $article->title) }}">
        </div>

        <!-- Slug -->
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" name="slug" class="form-control" required value="{{ old('name', $article->slug) }}">
        </div>

        <!-- Author -->
        <div class="mb-3">
            <label for="author" class="form-label">Penulis</label>
            <input type="text" name="author" class="form-control" required value="{{ old('name', $article->author) }}">
        </div>

        <!-- Published At -->
        <div class="mb-3">
            <label for="published_at" class="form-label">Tanggal Terbit</label>
            <input type="text" name="published_at" class="form-control" required value="{{ old('name', $article->published_at) }}">
        </div>

        <!-- Status -->
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-select @error('status') is-invalid @enderror" required>
                <option value="">-- Pilih Status --</option>
                <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                <option value="published" {{ old('status') == 'published' ? 'selected' : '' }}>Published</option>
            </select>
        </div>

        <!-- Category -->
        <div class="mb-3">
            <label for="category" class="form-label">Kategori</label>
            <input type="text" name="category" class="form-control" required value="{{ old('name', $article->category) }}">
        </div>

        <!-- Tags -->
        <div class="mb-3">
            <label for="tags" class="form-label">Tag</label>
            <input type="text" name="tags" class="form-control" required value="{{ old('name', $article->tags) }}">
        </div>

        <!-- Thumbnail -->
        <div class="mb-3">
            <label for="thumbnail" class="form-label">Thumbnail</label>
            <input type="text" name="thumbnail" class="form-control" required value="{{ old('name', $article->thumbnail) }}">
        </div>

        <!-- Content -->
        <div class="mb-3">
            <label for="content" class="form-label">Konten</label>
            <textarea name="content" id="content" rows="5" class="form-control" required value="{{ old('name', $article->content) }}"></textarea>
        </div>

        <!-- Excerpt -->
        <div class="mb-3">
            <label for="excerpt" class="form-label">Ringkasan</label>
            <textarea name="excerpt" id="excerpt" rows="3" class="form-control" required value="{{ old('name', $article->excerpt) }}"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Artikel</button>
    </form>
</div>
@endsection
