@extends('layouts.dashboard')

@section('title', 'Detail Artikel')

@section('content')
<div class="container">
    <h1>{{ $article->title }}</h1>

    <p><strong>Slug:</strong> {{ $article->slug }}</p>
    <p><strong>Penulis:</strong> {{ $article->author }}</p>
    <p><strong>Tanggal Terbit:</strong> {{ $article->published_at }}</p>
    <p><strong>Status:</strong> {{ $article->status }}</p>
    <p><strong>Kategori:</strong> {{ $article->category }}</p>
    <p><strong>Tag:</strong> {{ $article->tags }}</p>

    <h2>Konten</h2>
    <div>{!! $article->content !!}</div>

    <a href="{{ route('admin.articles.edit', $article->id) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('admin.articles.destroy', $article->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Hapus</button>
    </form>
</div>
@endsection
