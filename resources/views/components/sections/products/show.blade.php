<!-- Product Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="mt-3 text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="section-title bg-white text-center text-primary px-3">Produk</p>
            <h1 class="mb-5">Produk Susu Kami untuk Hidup Sehat</h1>
        </div>
        <div class="row gx-4">
            @foreach ($products as $product)
                <x-product-card :product="$product"/>
            @endforeach
        </div>
    </div>
</div>
<!-- Product End -->
