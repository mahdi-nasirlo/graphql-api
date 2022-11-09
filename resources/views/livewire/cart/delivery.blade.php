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
                    </a><a class="step-item active" href="checkout-details.html">
                        <div class="step-progress"><span class="step-count">2</span></div>
                        <div class="step-label"><i class="ci-user-circle"></i>جزئیات</div>
                    </a><a class="step-item active current" href="checkout-shipping.html">
                        <div class="step-progress"><span class="step-count">3</span></div>
                        <div class="step-label"><i class="ci-package"></i>حمل</div>
                    </a><a class="step-item" href="{{ route('cart.service') }}">
                        <div class="step-progress"><span class="step-count">4</span></div>
                        <div class="step-label"><i class="ci-card"></i>پرداخت</div>
                    </a><a class="step-item" href="checkout-review.html">
                        <div class="step-progress"><span class="step-count">5</span></div>
                        <div class="step-label"><i class="ci-check-circle"></i>مرور</div>
                    </a></div>
                <!-- Shipping methods table-->
                <h2 class="h6 pb-3 mb-2">روش حمل و نقل را انتخاب کنید</h2>
                <div class="table-responsive">
                    <table class="table table-hover fs-sm border-top">
                        <thead>
                            <tr>
                                <th class="align-middle"></th>
                                <th class="align-middle">روش حمل و نقل</th>
                                <th class="align-middle">زمان تحویل</th>
                                <th class="align-middle">کارمزد</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="form-check mb-4">
                                        <input class="form-check-input" type="radio" id="courier"
                                            name="shipping-method" checked="">
                                        <label class="form-check-label" for="courier"></label>
                                    </div>
                                </td>
                                <td class="align-middle"><span class="text-dark fw-medium">پیک</span><br><span
                                        class="text-muted">همه آدرس ها (منطقه پیش فرض) ، ایالات متحده و کانادا </span>
                                </td>
                                <td class="align-middle">5-7 روز</td>
                                <td class="align-middle">26050</td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="form-check mb-4">
                                        <input class="form-check-input" type="radio" id="local"
                                            name="shipping-method">
                                        <label class="form-check-label" for="local"></label>
                                    </div>
                                </td>
                                <td class="align-middle"><span class="text-dark fw-medium">وانت</span><br><span
                                        class="text-muted">همه آدرس ها (منطقه پیش فرض) ، ایالات متحده و کانادا </span>
                                </td>
                                <td class="align-middle">5-7 روز</td>
                                <td class="align-middle">10000</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check mb-4">
                                        <input class="form-check-input" type="radio" id="flat"
                                            name="shipping-method">
                                        <label class="form-check-label" for="flat"></label>
                                    </div>
                                </td>
                                <td class="align-middle"><span class="text-dark fw-medium">وانت</span><br><span
                                        class="text-muted">همه آدرس ها (منطقه پیش فرض) ، ایالات متحده و کانادا </span>
                                </td>
                                <td class="align-middle">5-7 روز</td>
                                <td class="align-middle">1200</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check mb-4">
                                        <input class="form-check-input" type="radio" id="ups"
                                            name="shipping-method">
                                        <label class="form-check-label" for="ups"></label>
                                    </div>
                                </td>
                                <td class="align-middle"><span class="text-dark fw-medium">وانت</span><br><span
                                        class="text-muted">همه آدرس ها (منطقه پیش فرض) ، ایالات متحده و کانادا </span>
                                </td>
                                <td class="align-middle">5-7 روز</td>
                                <td class="align-middle">180000</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check mb-4">
                                        <input class="form-check-input" type="radio" id="pickup"
                                            name="shipping-method">
                                        <label class="form-check-label" for="pickup"></label>
                                    </div>
                                </td>
                                <td class="align-middle"><span class="text-dark fw-medium">وانت</span><br><span
                                        class="text-muted">همه آدرس ها (منطقه پیش فرض) ، ایالات متحده و کانادا </span>
                                </td>
                                <td class="align-middle">5-7 روز</td>
                                <td class="align-middle">00</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check mb-4">
                                        <input class="form-check-input" type="radio" id="locker"
                                            name="shipping-method">
                                        <label class="form-check-label" for="locker"></label>
                                    </div>
                                </td>
                                <td class="align-middle"><span class="text-dark fw-medium">وانت</span><br><span
                                        class="text-muted">همه آدرس ها (منطقه پیش فرض) ، ایالات متحده و کانادا </span>
                                </td>
                                <td class="align-middle">5-7 روز</td>
                                <td class="align-middle">9099</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check mb-4">
                                        <input class="form-check-input" type="radio" id="global-export"
                                            name="shipping-method">
                                        <label class="form-check-label" for="global-export"></label>
                                    </div>
                                </td>
                                <td class="align-middle"><span class="text-dark fw-medium">پیک</span><br><span
                                        class="text-muted fs-sm">همه آدرس ها (منطقه پیش فرض) ، ایالات متحده و
                                        کانادا</span></td>
                                <td class="align-middle">5-7 روز</td>
                                <td class="align-middle">25000</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check mb-4">
                                        <input class="form-check-input" type="radio" id="same-day"
                                            name="shipping-method">
                                        <label class="form-check-label" for="same-day"></label>
                                    </div>
                                </td>
                                <td class="align-middle"><span class="text-dark fw-medium">وانت</span><br><span
                                        class="text-muted">همه آدرس ها (منطقه پیش فرض) ، ایالات متحده و کانادا </span>
                                </td>
                                <td class="align-middle">5-7 روز</td>
                                <td class="align-middle">3400</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check mb-4">
                                        <input class="form-check-input" type="radio" id="international"
                                            name="shipping-method">
                                        <label class="form-check-label" for="international"></label>
                                    </div>
                                </td>
                                <td class="align-middle"><span class="text-dark fw-medium">پیک</span><br><span
                                        class="text-muted">همه آدرس ها (منطقه پیش فرض) ، ایالات متحده و کانادا </span>
                                </td>
                                <td class="align-middle">5-7 روز</td>
                                <td class="align-middle">2700</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Navigation (desktop)-->
                <div class="d-none d-lg-flex pt-4">
                    <div class="w-50 pe-3"><a class="btn btn-secondary d-block w-100" href="checkout-details.html"><i
                                class="ci-arrow-left mt-sm-0 me-1"></i><span class="d-none d-sm-inline">برگشت به
                                آدرس</span><span class="d-inline d-sm-none">برگشت</span></a></div>
                    <div class="w-50 ps-2"><a class="btn btn-primary d-block w-100"
                            href="{{ route('cart.service') }}"><span class="d-none d-sm-inline">پرداخت</span><span
                                class="d-inline d-sm-none">بعدی</span><i class="ci-arrow-right mt-sm-0 ms-1"></i></a>
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
                    <div class="w-50 pe-3"><a class="btn btn-secondary d-block w-100" href="checkout-details.html"><i
                                class="ci-arrow-left mt-sm-0 me-1"></i><span class="d-none d-sm-inline">برگشت به
                                آدرس</span><span class="d-inline d-sm-none">برگشت</span></a></div>
                    <div class="w-50 ps-2"><a class="btn btn-primary d-block w-100"
                            href="{{ route('cart.service') }}"><span class="d-none d-sm-inline">پرداخت</span><span
                                class="d-inline d-sm-none">بعدی</span><i class="ci-arrow-right mt-sm-0 ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
