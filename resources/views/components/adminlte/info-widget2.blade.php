{{-- filepath: resources/views/components/adminlte/info-widget2.blade.php --}}
<div class="info-box mb-3 {{ $class ?? '' }}">
    <span class="info-box-icon">
        {{ $icon ?? '' }}
    </span>
    <div class="info-box-content">
        <span class="info-box-text">{{ $text ?? $title ?? '' }}</span>
        <span class="info-box-number">{{ $number ?? '' }}</span>
    </div>
</div>
