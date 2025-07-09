@extends('layouts.app')
@section('title', 'Home')

@section('content')

<x-sections.header
    header="Kontak"
    :breadcrumbs="[
        ['label' => 'Beranda', 'url' => route('home')],
        ['label' => 'Kontak', 'url' => '']
    ]"
/>
<x-sections.contact />

@endsection
