@extends('layouts.app')
@section('title', 'Home')
@section('content')

<x-sections.header
    header="Blog Kami"
    :breadcrumbs="[
        ['label' => 'Beranda', 'url' => route('home')],
        ['label' => 'Blog Kami', 'url' => '']
    ]"
/>

<x-sections.blog />

@endsection
