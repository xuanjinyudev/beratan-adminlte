@props(['product'])

<div class="mt-4 col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
    <div class="product-item">
        <div class="position-relative">
            <img class="img-fluid" src="{{ asset('storage/'.$product->image) }}" alt="">
            <div class="product-overlay">
                <a class="btn btn-square btn-secondary rounded-circle m-1" href="{{ route('product.show', $product->id) }}"><i class="bi bi-link"></i></a>
                <a class="btn btn-square btn-secondary rounded-circle m-1" href=""><i class="bi bi-cart"></i></a>
            </div>
        </div>
        <div class="text-center p-4">
            <a class="d-block h5" href="{{ route('product.show', $product->id) }}">{{ $product->name }}</a>
            <span class="text-primary me-1">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
            @if(isset($product->old_price))
                <span class="text-decoration-line-through">Rp {{ number_format($product->old_price, 0, ',', '.') }}</span>
            @endif
        </div>
    </div>
</div>
