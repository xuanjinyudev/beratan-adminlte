<aside class="app-sidebar bg-dark shadow" data-bs-theme="dark">
<!--begin::Sidebar Brand-->
<div class="sidebar-brand">
    <!--begin::Brand Link-->
    <a href="../index.html" class="brand-link">
    <!--begin::Brand Image-->
    <img
        src="{{ asset('dist/assets/img/AdminLTELogo.png') }}"
        alt="AdminLTE Logo"
        class="brand-image opacity-75 shadow"
    />
    <!--end::Brand Image-->
    <!--begin::Brand Text-->
    <span class="brand-text fw-light">Beratan Dairy</span>
    <!--end::Brand Text-->
    </a>
    <!--end::Brand Link-->
</div>
<!--end::Sidebar Brand-->
<!--begin::Sidebar Wrapper-->
<div class="sidebar-wrapper">
    <nav class="mt-2">
    <!--begin::Sidebar Menu-->
    <ul
        class="nav sidebar-menu flex-column"
        data-lte-toggle="treeview"
        role="menu"
        data-accordion="false"
    >
        <li class="nav-item">
        <a href="{{ route('dashboard') }}" class="nav-link">
            <i class="nav-icon bi bi-house-door"></i>
            <p>
            Dashboard
            </p>
        </a>
        </li>

        <x-adminlte.list-menu
            header="Produk"
            link="#"
            icon="bi bi-bag"
            title="Daftar Produk"
            :active="request()->routeIs('admin.products.*')">
            <x-adminlte.list-menu2
                link="{{ route('admin.products.index') }}"
                title="Daftar Produk"
                icon="bi bi-box-seam"
                :active="request()->routeIs('admin.products.index')"/>
        </x-adminlte.list-menu>

        <x-adminlte.list-menu
            link="#"
            icon="bi bi-list-check"
            title="Daftar Kategori">
        </x-adminlte.list-menu>

        <x-adminlte.list-menu
            header="Transaksi"
            link="#"
            icon="bi bi-cash-coin"
            title="Daftar Transaksi">
        </x-adminlte.list-menu>
        <x-adminlte.list-menu
            link="#"
            icon="bi bi-people"
            title="Daftar Penggguna">
        </x-adminlte.list-menu>
        <x-adminlte.list-menu
            link="{{ route('admin.articles.index') }}"
            icon="bi bi-file-richtext-fill"
            title="Daftar Artikel">
        </x-adminlte.list-menu>
        <x-adminlte.list-menu
            link="#"
            icon="bi bi-send"
            title="Daftar Pesan">
        </x-adminlte.list-menu>
    </ul>
    <!--end::Sidebar Menu-->
    </nav>
</div>
<!--end::Sidebar Wrapper-->
</aside>
