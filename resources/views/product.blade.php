@extends('layouts.app')
@section('title', 'Produk Kami')

@section('content')

<x-sections.header
    header="Produk Kami"
    :breadcrumbs="[
        ['label' => 'Beranda', 'url' => route('home')],
        ['label' => 'Produk Kami', 'url' => '']
    ]"
/>
<x-sections.products.show :products="$products" />

@endsection
