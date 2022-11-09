<div>
    <div class="page-title-overlap bg-dark pt-4">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
            <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
                <nav aria-label="breadcrumb">
                    <ol
                        class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                        <li class="breadcrumb-item"><a class="text-nowrap" href="index-2.html"><i
                                    class="ci-home"></i>خانه</a></li>
                        <li class="breadcrumb-item text-nowrap"><a href="shop-grid-ls.html">فروشگاه</a>
                        </li>
                        <li class="breadcrumb-item text-nowrap active" aria-current="page">بررسی</li>
                    </ol>
                </nav>
            </div>
            <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
                <h1 class="h3 text-light mb-0">بررسی</h1>
            </div>
        </div>
    </div>
    <div class="container pb-5 mb-2 mb-md-4">
        <div class="row">
            <section class="col-lg-8">
                <!-- Steps-->
                <div class="steps steps-light pt-2 pb-3 mb-5"><a class="step-item active" href="shop-cart.html">
                        <div class="step-progress"><span class="step-count">1</span></div>
                        <div class="step-label"><i class="ci-cart"></i>سبد خرید</div>
                    </a><a class="step-item active current" href="checkout-details.html">
                        <div class="step-progress"><span class="step-count">2</span></div>
                        <div class="step-label"><i class="ci-user-circle"></i>جزئیات</div>
                    </a><a class="step-item" href="{{ route('cart.delivery') }}-shipping.html">
                        <div class="step-progress"><span class="step-count">3</span></div>
                        <div class="step-label"><i class="ci-package"></i>حمل</div>
                    </a><a class="step-item" href="checkout-payment.html">
                        <div class="step-progress"><span class="step-count">4</span></div>
                        <div class="step-label"><i class="ci-card"></i>پرداخت</div>
                    </a><a class="step-item" href="checkout-review.html">
                        <div class="step-progress"><span class="step-count">5</span></div>
                        <div class="step-label"><i class="ci-check-circle"></i>مرور</div>
                    </a></div>
                <!-- Autor info-->
                <div
                    class="d-sm-flex justify-content-between align-items-center bg-secondary p-4 rounded-3 mb-grid-gutter">
                    <div class="d-flex align-items-center">
                        <div class="img-thumbnail rounded-circle position-relative flex-shrink-0"><span
                                class="badge bg-warning position-absolute end-0 mt-n2" data-bs-toggle="tooltip"
                                title="" data-bs-original-title="Reward points">384</span><img
                                class="rounded-circle" src="img/shop/account/avatar.jpg" width="90"
                                alt="سوزان گاردنر"></div>
                        <div class="ps-3">
                            <h3 class="fs-base mb-0">سوزان گاردنر</h3><span
                                class="text-accent fs-sm">Setin@gmail.com</span>
                        </div>
                    </div><a class="btn btn-light btn-sm btn-shadow mt-3 mt-sm-0" href="account-profile.html"><i
                            class="ci-edit me-2"></i>ویرایش پروفایل</a>
                </div>
                <!-- آدرس ارسال-->
                <h2 class="h6 pt-1 pb-3 mb-3 border-bottom">آدرس ارسال</h2>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label" for="checkout-fn">نام کوچک</label>
                            <input class="form-control" type="text" id="checkout-fn">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label" for="checkout-ln">نام خانوادگی</label>
                            <input class="form-control" type="text" id="checkout-ln">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label" for="checkout-email">آدرس ایمیل</label>
                            <input class="form-control" type="email" id="checkout-email">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label" for="checkout-phone">شماره تلفن</label>
                            <input class="form-control" type="text" id="checkout-phone">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label" for="checkout-company">شرکت</label>
                            <input class="form-control" type="text" id="checkout-company">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label" for="checkout-country">کشور</label>
                            <select class="form-select" id="checkout-country">
                                <option>انتخاب کشور</option>
                                <option>استرلیا</option>
                                <option>کانادا</option>
                                <option>فرانسه</option>
                                <option>آلمان</option>
                                <option>ایران</option>
                                <option>آمریکا</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label" for="checkout-city">شهر</label>
                            <select class="form-select" id="checkout-city">
                                <option>انتخاب شهر</option>
                                <option>تهران</option>
                                <option>ساری</option>
                                <option>یزد</option>
                                <option>کرمان</option>
                                <option>اهواز</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label" for="checkout-zip">کد پستی</label>
                            <input class="form-control" type="text" id="checkout-zip">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label" for="checkout-address-1">آدرس اول</label>
                            <input class="form-control" type="text" id="checkout-address-1">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label" for="checkout-address-2">آدرس دوم</label>
                            <input class="form-control" type="text" id="checkout-address-2">
                        </div>
                    </div>
                </div>
                <h6 class="mb-3 py-3 border-bottom">آدرس کامل</h6>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" checked="" id="same-address">
                    <label class="form-check-label" for="same-address">همان آدرس حمل و نقل است</label>
                </div>
                <!-- Navigation (desktop)-->
                <div class="d-none d-lg-flex pt-4 mt-3">
                    <div class="w-50 pe-3"><a class="btn btn-secondary d-block w-100"
                            href="{{ route('cart.index') }}">
                            <i class="ci-arrow-left mt-sm-0 me-1"></i>
                            <span class="d-none d-sm-inline">
                                برگشت به سبد
                                خرید
                            </span>
                            <span class="d-inline d-sm-none">برگشت</span>
                        </a>
                    </div>
                    <div class="w-50 ps-2"><a class="btn btn-primary d-block w-100"
                            href="{{ route('cart.delivery') }}">
                            <span class="d-none d-sm-inline">
                                روش
                                ارسال
                            </span>
                            <span class="d-inline d-sm-none">بعدی</span>
                            <i class="ci-arrow-right mt-sm-0 ms-1"></i>
                        </a>
                    </div>
                </div>
            </section>
            <!-- Sidebar-->
            <aside class="col-lg-4 pt-4 pt-lg-0 ps-xl-5">
                <div class="bg-white rounded-3 shadow-lg p-4 ms-lg-auto">
                    <div class="py-2 px-xl-2">
                        <div class="widget mb-3">
                            <h2 class="widget-title text-center">خلاصه سفارش</h2>
                            <div class="d-flex align-items-center pb-2 border-bottom"><a class="d-block flex-shrink-0"
                                    href="shop-single-v1.html"><img src="img/shop/cart/widget/01.jpg" width="64"
                                        alt="محصول"></a>
                                <div class="ps-2">
                                    <h6 class="widget-product-title"><a href="shop-single-v1.html">کفش کتانی</a></h6>
                                    <div class="widget-product-meta"><span
                                            class="text-accent me-2">150<small>00</small></span><span
                                            class="text-muted">x 1</span></div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center py-2 border-bottom"><a class="d-block flex-shrink-0"
                                    href="shop-single-v1.html"><img src="img/shop/cart/widget/02.jpg" width="64"
                                        alt="محصول"></a>
                                <div class="ps-2">
                                    <h6 class="widget-product-title"><a href="shop-single-v1.html">کفش کتانی</a></h6>
                                    <div class="widget-product-meta"><span
                                            class="text-accent me-2">79.<small>50</small></span><span
                                            class="text-muted">x 1</span></div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center py-2 border-bottom"><a class="d-block flex-shrink-0"
                                    href="shop-single-v1.html"><img src="img/shop/cart/widget/03.jpg" width="64"
                                        alt="محصول"></a>
                                <div class="ps-2">
                                    <h6 class="widget-product-title"><a href="shop-single-v1.html">کفش کتانی</a></h6>
                                    <div class="widget-product-meta"><span
                                            class="text-accent me-2">22.<small>50</small></span><span
                                            class="text-muted">x 1</span></div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center py-2 border-bottom"><a class="d-block flex-shrink-0"
                                    href="shop-single-v1.html"><img src="img/shop/cart/widget/04.jpg" width="64"
                                        alt="محصول"></a>
                                <div class="ps-2">
                                    <h6 class="widget-product-title"><a href="shop-single-v1.html">کفش کتانی</a></h6>
                                    <div class="widget-product-meta"><span
                                            class="text-accent me-2">9.<small>00</small></span><span
                                            class="text-muted">x 1</span></div>
                                </div>
                            </div>
                        </div>
                        <ul class="list-unstyled fs-sm pb-2 border-bottom">
                            <li class="d-flex justify-content-between align-items-center"><span class="me-2">جمع
                                    کل:</span><span class="text-end">265.<small>00</small></span></li>
                            <li class="d-flex justify-content-between align-items-center"><span
                                    class="me-2">ارسال:</span><span class="text-end">—</span></li>
                            <li class="d-flex justify-content-between align-items-center"><span
                                    class="me-2">مالیات:</span><span class="text-end">9.<small>50</small></span>
                            </li>
                            <li class="d-flex justify-content-between align-items-center"><span class="me-2">تخفیف :
                                </span><span class="text-end">—</span></li>
                        </ul>
                        <h3 class="fw-normal text-center my-4">274.<small>50</small></h3>
                        <form class="needs-validation" method="post" novalidate="">
                            <div class="mb-3">
                                <input class="form-control" type="text" placeholder="کد تخفیف" required="">
                                <div class="invalid-feedback">کد تخفیف را وارد کنید</div>
                            </div>
                            <button class="btn btn-outline-primary d-block w-100" type="submit">اعمال کد </button>
                        </form>
                    </div>
                </div>
            </aside>
        </div>
        <!-- Navigation (mobile)-->
        <div class="row d-lg-none">
            <div class="col-lg-8">
                <div class="d-flex pt-4 mt-3">
                    <div class="w-50 pe-3"><a class="btn btn-secondary d-block w-100"
                            href="{{ route('cart.index') }}"><i class="ci-arrow-left mt-sm-0 me-1"></i><span
                                class="d-none d-sm-inline">برگشت به سبد
                                خرید</span><span class="d-inline d-sm-none">برگشت</span></a></div>
                    <div class="w-50 ps-2"><a class="btn btn-primary d-block w-100"
                            href="{{ route('cart.delivery') }}"><span class="d-none d-sm-inline">روش ارسال</span><span
                                class="d-inline d-sm-none">بعدی</span><i class="ci-arrow-right mt-sm-0 ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
