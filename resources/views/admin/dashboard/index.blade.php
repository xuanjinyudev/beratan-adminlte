@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')

<main class="app-main">
<!--begin::App Content Header-->
<div class="app-content-header">
    <!--begin::Container-->
    <div class="container-fluid">
    <!--begin::Row-->
    <div class="row">
        <div class="col-sm-6"><h3 class="mb-0">Dashboard</h3></div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
        </div>
    </div>
    <!--end::Row-->
    </div>
    <!--end::Container-->
</div>
<div class="app-content">
    <!--begin::Container-->
    <div class="container-fluid">
    <!-- Info boxes -->
    <x-adminlte.info-widget></x-adminlte.info-widget>
    <!-- /.row -->
    <!--begin::Row-->
    <div class="row">
        <div class="col-md-12">
        <div class="card mb-4">
            <div class="card-header">
            <h5 class="card-title">Monthly Recap Report</h5>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse">
                <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                </button>
                <div class="btn-group">
                <button
                    type="button"
                    class="btn btn-tool dropdown-toggle"
                    data-bs-toggle="dropdown"
                >
                    <i class="bi bi-wrench"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" role="menu">
                    <a href="#" class="dropdown-item">Action</a>
                    <a href="#" class="dropdown-item">Another action</a>
                    <a href="#" class="dropdown-item"> Something else here </a>
                    <a class="dropdown-divider"></a>
                    <a href="#" class="dropdown-item">Separated link</a>
                </div>
                </div>
                <button type="button" class="btn btn-tool" data-lte-toggle="card-remove">
                <i class="bi bi-x-lg"></i>
                </button>
            </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <!--begin::Row-->
            <div class="row">
                <div class="col-md-8">
                <p class="text-center">
                    <strong>Sales: 1 Jan, 2023 - 30 Jul, 2023</strong>
                </p>
                <div id="sales-chart"></div>
                </div>
                <!-- /.col -->
                <div class="col-md-4">
                <p class="text-center"><strong>Goal Completion</strong></p>
                <div class="progress-group">
                    Add Products to Cart
                    <span class="float-end"><b>160</b>/200</span>
                    <div class="progress progress-sm">
                    <div class="progress-bar text-bg-primary" style="width: 80%"></div>
                    </div>
                </div>
                <!-- /.progress-group -->
                <div class="progress-group">
                    Complete Purchase
                    <span class="float-end"><b>310</b>/400</span>
                    <div class="progress progress-sm">
                    <div class="progress-bar text-bg-danger" style="width: 75%"></div>
                    </div>
                </div>
                <!-- /.progress-group -->
                <div class="progress-group">
                    <span class="progress-text">Visit Premium Page</span>
                    <span class="float-end"><b>480</b>/800</span>
                    <div class="progress progress-sm">
                    <div class="progress-bar text-bg-success" style="width: 60%"></div>
                    </div>
                </div>
                <!-- /.progress-group -->
                <div class="progress-group">
                    Send Inquiries
                    <span class="float-end"><b>250</b>/500</span>
                    <div class="progress progress-sm">
                    <div class="progress-bar text-bg-warning" style="width: 50%"></div>
                    </div>
                </div>
                <!-- /.progress-group -->
                </div>
                <!-- /.col -->
            </div>
            <!--end::Row-->
            </div>
            <!-- ./card-body -->
            <div class="card-footer">
            <!--begin::Row-->
            <div class="row">
                <div class="col-md-3 col-6">
                <div class="text-center border-end">
                    <span class="text-success">
                    <i class="bi bi-caret-up-fill"></i> 17%
                    </span>
                    <h5 class="fw-bold mb-0">$35,210.43</h5>
                    <span class="text-uppercase">TOTAL REVENUE</span>
                </div>
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-6">
                <div class="text-center border-end">
                    <span class="text-info"> <i class="bi bi-caret-left-fill"></i> 0% </span>
                    <h5 class="fw-bold mb-0">$10,390.90</h5>
                    <span class="text-uppercase">TOTAL COST</span>
                </div>
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-6">
                <div class="text-center border-end">
                    <span class="text-success">
                    <i class="bi bi-caret-up-fill"></i> 20%
                    </span>
                    <h5 class="fw-bold mb-0">$24,813.53</h5>
                    <span class="text-uppercase">TOTAL PROFIT</span>
                </div>
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-6">
                <div class="text-center">
                    <span class="text-danger">
                    <i class="bi bi-caret-down-fill"></i> 18%
                    </span>
                    <h5 class="fw-bold mb-0">1200</h5>
                    <span class="text-uppercase">GOAL COMPLETIONS</span>
                </div>
                </div>
            </div>
            <!--end::Row-->
            </div>
            <!-- /.card-footer -->
        </div>
        <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!--end::Row-->
    <!--begin::Row-->
    <div class="row">
        <!-- Start col -->
        <div class="col-md-8">
        <!--begin::Row-->
        <div class="row g-4 mb-4">
            <div class="col-md-6">
            <!-- DIRECT CHAT -->
            <x-adminlte.chat></x-adminlte.chat>
            <!-- /.direct-chat -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
            <!-- USERS LIST -->
            <x-adminlte.member-list></x-adminlte.member-list>
            <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!--end::Row-->
        <!--begin::Latest Order Widget-->
        <x-adminlte.order-list></x-adminlte.order-list>
        <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-4">
        <!-- Info Boxes Style 2 -->
        <x-adminlte.info-widget2>
            <x-slot name="class">bg-primary text-on-bg-primary</x-slot>
            <x-slot name="icon"><i class="bi bi-gear-fill"></i></x-slot>
            <x-slot name="text">Inventory</x-slot>
            <x-slot name="number">5,200</x-slot>
        </x-adminlte.info-widget2>

        <x-adminlte.info-widget2>
            <x-slot name="class">bg-danger text-on-bg-danger</x-slot>
            <x-slot name="icon"><i class="bi bi-hand-thumbs-up-fill"></i></x-slot>
            <x-slot name="text">Likes</x-slot>
            <x-slot name="number">41,410</x-slot>
        </x-adminlte.info-widget2>

        <x-adminlte.info-widget2>
            <x-slot name="class">bg-info text-on-bg-info</x-slot>
            <x-slot name="icon"><i class="bi bi-hand-thumbs-up-fill"></i></x-slot>
            <x-slot name="text">Likes</x-slot>
            <x-slot name="number">41,410</x-slot>
        </x-adminlte.info-widget2>

        <x-adminlte.info-widget2>
            <x-slot name="class">bg-success text-on-bg-success</x-slot>
            <x-slot name="icon"><i class="bi bi-cart-fill"></i></x-slot>
            <x-slot name="text">Sales</x-slot>
            <x-slot name="number">760</x-slot>
        </x-adminlte.info-widget2>

        <x-adminlte.info-widget2>
            <x-slot name="class">bg-secondary text-on-bg-secondary</x-slot>
            <x-slot name="icon"><i class="bi bi-people-fill"></i></x-slot>
            <x-slot name="text">New Members</x-slot>
            <x-slot name="number">2,000</x-slot>
        </x-adminlte.info-widget2>

        <x-adminlte.info-widget2>
            <x-slot name="class">bg-primary text-on-bg-primary</x-slot>
            <x-slot name="icon"><i class="bi bi-people-fill"></i></x-slot>
            <x-slot name="text">New Members</x-slot>
            <x-slot name="number">2,000</x-slot>
        </x-adminlte.info-widget2>
        <!-- /.info-box -->
        <div class="card mb-4">
            <div class="card-header">
            <h3 class="card-title">Browser Usage</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse">
                <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                </button>
                <button type="button" class="btn btn-tool" data-lte-toggle="card-remove">
                <i class="bi bi-x-lg"></i>
                </button>
            </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <!--begin::Row-->
            <div class="row">
                <div class="col-12"><div id="pie-chart"></div></div>
                <!-- /.col -->
            </div>
            <!--end::Row-->
            </div>
            <!-- /.card-body -->
            <div class="card-footer p-0">
            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                <a href="#" class="nav-link">
                    United States of America
                    <span class="float-end text-danger">
                    <i class="bi bi-arrow-down fs-7"></i>
                    12%
                    </span>
                </a>
                </li>
                <li class="nav-item">
                <a href="#" class="nav-link">
                    India
                    <span class="float-end text-success">
                    <i class="bi bi-arrow-up fs-7"></i> 4%
                    </span>
                </a>
                </li>
                <li class="nav-item">
                <a href="#" class="nav-link">
                    China
                    <span class="float-end text-info">
                    <i class="bi bi-arrow-left fs-7"></i> 0%
                    </span>
                </a>
                </li>
            </ul>
            </div>
            <!-- /.footer -->
        </div>
        <!-- /.card -->
        <!-- PRODUCT LIST -->
        <x-adminlte.add-product-list></x-adminlte.add-product-list>
        <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!--end::Row-->
    </div>
    <!--end::Container-->
</div>
<!--end::App Content-->
</main>
@endsection
