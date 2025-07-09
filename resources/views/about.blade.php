@extends('layouts.app')
@section('title', 'Tentang Kami')
@section('content')

<x-sections.header
    header="Tentang Kami"
    :breadcrumbs="[
        ['label' => 'Beranda', 'url' => route('home')],
        ['label' => 'Tentang Kami', 'url' => '']
    ]"
/>
<x-sections.about />
<x-sections.banner />
<x-sections.teams.show />

@endsection
