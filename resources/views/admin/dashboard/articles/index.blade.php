@extends('layouts.dashboard')

@section('title', 'Daftar Artikel')

@section('content')
<div class="container">
    <h1>Daftar Artikel</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Slug</th>
                <th>Penulis</th>
                <th>Tanggal Terbit</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
                <tr>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->slug }}</td>
                    <td>{{ $article->author }}</td>
                    <td>{{ $article->published_at }}</td>
                    <td>{{ $article->status }}</td>
                    <td>
                        <a href="{{ route('admin.articles.edit', $article->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.articles.destroy', $article->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('admin.articles.create') }}" class="btn btn-primary">Buat Artikel Baru</a>
</div>
@endsection
