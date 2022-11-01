@extends('layout.master')

@section('head')
    <style>
        .accordion-button::after {
            width: 20px;
            height: 20px;
        }

        .accordion-button {
            font-size: 14px
        }
    </style>
@endsection

@section('content')

    <div class="bg-secondary py-4">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
            <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb flex-lg-nowrap justify-content-center justify-content-lg-start">
                        <li class="breadcrumb-item"><a class="text-nowrap" href="index-2.html"><i class="ci-home"></i>خانه</a>
                        </li>
                        <li class="breadcrumb-item text-nowrap"><a href="#">فروشگاه</a>
                        </li>
                        <li class="breadcrumb-item text-nowrap active" aria-current="page">{{ $category->name }}</li>
                    </ol>
                </nav>
            </div>
            <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
                <h1 class="h3 mb-0">{{ $category->name }}</h1>
            </div>
        </div>
    </div>
    <div class="container pb-4 pb-sm-5">
        <!-- Categories grid-->
        <div class="row pt-5">

            @foreach ($category->children as $item)
                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card border-0">
                        <a class="d-block overflow-hidden rounded-3" href="shop-grid-ls.html">
                            @if ($item->cover)
                                <img class="d-block w-100" src="{{ asset('/storage/' . $item->cover) }}"
                                    alt="{{ $item->name }}">
                            @else
                                <img class="d-block w-100" src="{{ asset('/img/placeholder.png') }}"
                                    alt="{{ $item->name }}">
                            @endif
                        </a>
                        <div class="card-body ps-1">
                            <h2 class="h5">
                                <a href="{{ route('store.product.list', $item) }}">
                                    {{ $item->name }}
                                </a>
                            </h2>
                            <ul class="widget-list widget-filter-list pt-1" style="height: 8rem;" data-simplebar
                                data-simplebar-auto-hide="false">
                                @include('page.store.category-list.category_child', compact('item'))
                            </ul>
                            <div class="pt-1">
                                <hr>
                                <div class="d-flex align-items-center justify-content-between">
                                    <a class="nav-link-style" href="#">
                                        <i class="ci-arrow-right-circle me-2"></i>
                                        دیدن
                                        همه
                                    </a>
                                    <span class="fs-ms text-muted">2,548</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Popular brands-->
        @if ($category->brands->count() > 0)
            <h2 class="h3 text-center py-4 mt-md-3"> برند های مرتبط با {{ $category->name }} </h2>
            <div class="row">
                @foreach ($category->brands as $brand)
                    <div class="col-md-3 col-sm-4 col-6">
                        <a class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4 mb-grid-gutter" href="#">
                            <img class="d-block mx-auto p-3" src="{{ asset('/storage/' . $brand->logo) }}" width="180"
                                alt="{{ $brand->name }}">
                        </a>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
