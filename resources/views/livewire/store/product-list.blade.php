{{-- 
//TODO make lazy loading product with category
//FIXME fix display of star in half
--}}
@include('livewire.store.modal')
<div>
    {{-- Success is as dangerous as failure. --}}
    <div class="page-title-overlap bg-dark pt-4">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
            <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
                <nav aria-label="breadcrumb">
                    <ol
                        class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                        <li class="breadcrumb-item"><a class="text-nowrap" href="index-2.html"><i
                                    class="ci-home"></i>خانه</a></li>
                        <li class="breadcrumb-item text-nowrap"><a href="#">فروشگاه</a>
                        </li>
                        <li class="breadcrumb-item text-nowrap active" aria-current="page">{{ $category->name }}</li>
                    </ol>
                </nav>
            </div>
            <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
                <h1 class="h3 text-light mb-0">{{ $category->name }}</h1>
            </div>
        </div>
    </div>
    <div class="container pb-5 mb-2 mb-md-4">
        <div class="row">
            @include('page.store.product-list.sidebar-index')
            <!-- Content  -->
            <section class="col-lg-8">
                <!-- Toolbar-->
                <div
                    class="d-flex justify-content-center justify-content-sm-between align-items-center pt-2 pb-4 pb-sm-5">
                    <div class="d-flex flex-wrap">
                        <div class="d-flex align-items-center flex-nowrap me-3 me-sm-4 pb-3">
                            <label class="text-light opacity-75 text-nowrap fs-sm me-2 d-none d-sm-block"
                                for="sorting">مرتب سازی:</label>
                            <select class="form-select" id="sorting">
                                <option>محبوبیت</option>
                                <option>قیمت کم به زیاد</option>
                                <option>قیمت زیاد به کم</option>
                                <option>امتیاز</option>
                            </select><span class="fs-sm text-light opacity-75 text-nowrap ms-2 d-none d-md-block">از
                                287 محصول</span>
                        </div>
                    </div>
                    <div class="d-flex pb-3"><a class="nav-link-style nav-link-light me-3" href="#"><i
                                class="ci-arrow-left"></i></a><span class="fs-md text-light">1 / 5</span><a
                            class="nav-link-style nav-link-light ms-3" href="#"><i class="ci-arrow-right"></i></a>
                    </div>
                    <div class="d-none d-sm-flex pb-3"><a
                            class="btn btn-icon nav-link-style bg-light text-dark disabled opacity-100 me-2"
                            href="#"><i class="ci-view-grid"></i></a><a
                            class="btn btn-icon nav-link-style nav-link-light" href="shop-list-ls.html"><i
                                class="ci-view-list"></i></a></div>
                </div>
                <!-- Products grid-->

                <div class="row mx-n2">
                    @foreach ($category->products as $item)
                        <div class="col-md-4 col-sm-6 px-2 mb-4">
                            <div class="card product-card">
                                <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip"
                                    data-bs-placement="left" title="اضافه کردن به علاقه مندی">
                                    <i class="ci-heart"></i>
                                </button>
                                <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html">
                                    <img src="{{ asset($item->cover ? "/storage/$item->cover" : '/placeholder.jpg') }}"
                                        alt="{{ $item->name }}">
                                </a>
                                <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1"
                                        href="#">{{ $category->name }}</a>
                                    <h3 class="product-title fs-sm"><a
                                            href="shop-single-v1.html">{{ $item->name }}</a>
                                    </h3>
                                    <div class="d-flex justify-content-between">
                                        <div class="product-price"><span class="text-accent">
                                                <strong>{{ number_format($item->price) }}</strong>
                                                <small>تومان</small>
                                            </span>
                                        </div>
                                        <div class="star-rating"><i
                                                class="star-rating-icon ci-star-filled active"></i><i
                                                class="star-rating-icon ci-star-filled active"></i><i
                                                class="star-rating-icon ci-star-filled active"></i><i
                                                class="star-rating-icon ci-star-half active"></i><i
                                                class="star-rating-icon ci-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body card-body-hidden">
                                    {{-- <div class="text-center pb-2">
                                        <div class="form-check form-option form-check-inline mb-2">
                                            <input class="form-check-input" type="radio" name="size8"
                                                id="m7">
                                            <label class="form-option-label" for="m7">M</label>
                                        </div>
                                        <div class="form-check form-option form-check-inline mb-2">
                                            <input class="form-check-input" type="radio" name="size8"
                                                id="l7" checked>
                                            <label class="form-option-label" for="l7">L</label>
                                        </div>
                                        <div class="form-check form-option form-check-inline mb-2">
                                            <input class="form-check-input" type="radio" name="size8"
                                                id="xl7">
                                            <label class="form-option-label" for="xl7">XL</label>
                                        </div>
                                    </div> --}}
                                    <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i
                                            class="ci-cart fs-sm me-1"></i>اضافه کردن به سبدخرید</button>
                                    <div class="text-center">
                                        <a wire:click='changeModalData({{ $item }})'
                                            class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal">
                                            <i class="ci-eye align-middle me-1">
                                            </i>مشاهده
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <hr class="my-3">
                <!-- Pagination-->
                <nav class="d-flex justify-content-between pt-2" aria-label="Page navigation">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#"><i
                                    class="ci-arrow-left me-2"></i>قبلی</a>
                        </li>
                    </ul>
                    <ul class="pagination">
                        <li class="page-item d-sm-none"><span class="page-link page-link-static">1 / 5</span></li>
                        <li class="page-item active d-none d-sm-block" aria-current="page"><span
                                class="page-link">1<span class="visually-hidden">(جاری)</span></span></li>
                        <li class="page-item d-none d-sm-block"><a class="page-link" href="#">2</a></li>
                        <li class="page-item d-none d-sm-block"><a class="page-link" href="#">3</a></li>
                        <li class="page-item d-none d-sm-block"><a class="page-link" href="#">4</a></li>
                        <li class="page-item d-none d-sm-block"><a class="page-link" href="#">5</a></li>
                    </ul>
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#" aria-label="Next">بعدی<i
                                    class="ci-arrow-right ms-2"></i></a></li>
                    </ul>
                </nav>
            </section>
        </div>
    </div>
</div>
