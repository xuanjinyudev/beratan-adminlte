{{-- filepath: resources/views/components/adminlte/list-menu.blade.php --}}
@props(['header' => null, 'link', 'title', 'icon' => 'bi bi-circle', 'active' => false])

@if(!empty($header))
<li class="nav-header">{{ $header }}</li>
@endif
<li class="nav-item">
    <a href="{{ $link }}" class="nav-link {{ $active ? 'active' : '' }}">
        <i class="nav-icon {{ $icon }}"></i>
        <p>
            {{ $title }}
            @if(trim($slot))
                <i class="nav-arrow bi bi-chevron-right"></i>
            @endif
        </p>
    </a>
    @if(trim($slot))
        <ul class="nav nav-treeview">
            {{ $slot }}
        </ul>
    @endif
</li>
