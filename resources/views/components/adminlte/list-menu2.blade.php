{{-- filepath: resources/views/components/adminlte/list-menu2.blade.php --}}
@props(['link' => '#', 'title' => 'Menu Item', 'icon' => 'bi bi-circle', 'active' => false])

<li class="nav-item">
    <a href="{{ $link }}" class="nav-link {{ $active ? 'active' : '' }}">
        <i class="nav-icon {{ $icon }}"></i>
        <p>{{ $title }}</p>
    </a>
</li>
