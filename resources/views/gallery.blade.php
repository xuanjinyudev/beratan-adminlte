@extends('layouts.app')
@section('title', 'Galeri')

@section('content')

<x-sections.header
    header="Galeri"
    :breadcrumbs="[
        ['label' => 'Beranda', 'url' => route('home')],
        ['label' => 'Galeri', 'url' => '']
    ]"
/>
<x-sections.gallery />

@endsection
