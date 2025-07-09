@extends('layouts.app')
@section('title', 'Layanan Kami')
@section('content')

<x-sections.header
    header="Layanan Kami"
    :breadcrumbs="[
        ['label' => 'Beranda', 'url' => route('home')],
        ['label' => 'Layanan Kami', 'url' => '']
    ]"
/>
<x-sections.service />
@endsection
