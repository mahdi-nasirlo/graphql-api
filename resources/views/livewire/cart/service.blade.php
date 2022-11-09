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
                    </a><a class="step-item active" href="checkout-shipping.html">
                        <div class="step-progress"><span class="step-count">3</span></div>
                        <div class="step-label"><i class="ci-package"></i>حمل</div>
                    </a><a class="step-item active current" href="checkout-payment.html">
                        <div class="step-progress"><span class="step-count">4</span></div>
                        <div class="step-label"><i class="ci-card"></i>پرداخت</div>
                    </a><a class="step-item" href="checkout-review.html">
                        <div class="step-progress"><span class="step-count">5</span></div>
                        <div class="step-label"><i class="ci-check-circle"></i>مرور</div>
                    </a></div>
                <!-- روش پرداخت accordion-->
                <h2 class="h6 pb-3 mb-2">روش پرداخت را انتخاب کنید</h2>
                <div class="accordion mb-2" id="payment-method">
                    <div class="accordion-item">
                        <h3 class="accordion-header"><a class="accordion-button" href="#card"
                                data-bs-toggle="collapse"><i class="ci-card fs-lg me-2 mt-n1 align-middle"></i>پرداخت با
                                کارت اعتباری</a></h3>
                        <div class="accordion-collapse collapse show" id="card" data-bs-parent="#payment-method">
                            <div class="accordion-body">
                                <p class="fs-sm">کارتهای اعتباری زیر را می پذیریم:<img
                                        class="d-inline-block align-middle" src="img/cards.png" width="187"
                                        alt="Cerdit Cards"></p>
                                <div class="credit-card-wrapper" data-jp-card-initialized="true">
                                    <div class="jp-card-container">
                                        <div class="jp-card">
                                            <div class="jp-card-front">
                                                <div class="jp-card-logo jp-card-elo">
                                                    <div class="e">e</div>
                                                    <div class="l">l</div>
                                                    <div class="o">o</div>
                                                </div>
                                                <div class="jp-card-logo jp-card-visa">Visa</div>
                                                <div class="jp-card-logo jp-card-visaelectron">Visa<div class="elec">
                                                        Electron</div>
                                                </div>
                                                <div class="jp-card-logo jp-card-mastercard">Mastercard</div>
                                                <div class="jp-card-logo jp-card-maestro">Maestro</div>
                                                <div class="jp-card-logo jp-card-amex"></div>
                                                <div class="jp-card-logo jp-card-discover">discover</div>
                                                <div class="jp-card-logo jp-card-unionpay">UnionPay</div>
                                                <div class="jp-card-logo jp-card-dinersclub"></div>
                                                <div class="jp-card-logo jp-card-hipercard">Hipercard</div>
                                                <div class="jp-card-logo jp-card-troy">troy</div>
                                                <div class="jp-card-logo jp-card-dankort">
                                                    <div class="dk">
                                                        <div class="d"></div>
                                                        <div class="k"></div>
                                                    </div>
                                                </div>
                                                <div class="jp-card-logo jp-card-jcb">
                                                    <div class="j">J</div>
                                                    <div class="c">C</div>
                                                    <div class="b">B</div>
                                                </div>
                                                <div class="jp-card-lower">
                                                    <div class="jp-card-shiny"></div>
                                                    <div class="jp-card-cvc jp-card-display jp-card-invalid">•••</div>
                                                    <div class="jp-card-number jp-card-display jp-card-invalid">••••
                                                        •••• •••• ••••</div>
                                                    <div class="jp-card-name jp-card-display jp-card-invalid">Full Name
                                                    </div>
                                                    <div class="jp-card-expiry jp-card-display jp-card-invalid"
                                                        data-before="month/year" data-after="valid
thru">••/••</div>
                                                </div>
                                            </div>
                                            <div class="jp-card-back">
                                                <div class="jp-card-bar"></div>
                                                <div class="jp-card-cvc jp-card-display jp-card-invalid">•••</div>
                                                <div class="jp-card-shiny"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <form class="credit-card-form row">
                                    <div class="mb-3 col-sm-6">
                                        <input class="form-control jp-card-invalid" type="text" name="number"
                                            placeholder="شماره کارت" required="">
                                    </div>
                                    <div class="mb-3 col-sm-6">
                                        <input class="form-control jp-card-invalid" type="text" name="name"
                                            placeholder="نام و نام خانوادگی" required="">
                                    </div>
                                    <div class="mb-3 col-sm-3">
                                        <input class="form-control jp-card-invalid" type="text" name="expiry"
                                            placeholder="ماه / سال" required="">
                                    </div>
                                    <div class="mb-3 col-sm-3">
                                        <input class="form-control jp-card-invalid" type="text" name="cvc"
                                            placeholder="سی وی سی" required="">
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-outline-primary d-block w-100 mt-0"
                                            type="submit">تایید</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header"><a class="accordion-button collapsed" href="#paypal"
                                data-bs-toggle="collapse"><i class="ci-paypal me-2 align-middle"></i>پرداخت با پی
                                پال</a></h3>
                        <div class="accordion-collapse collapse" id="paypal" data-bs-parent="#payment-method">
                            <div class="accordion-body fs-sm">
                                <p><span class="fw-medium">پی پال</span> - پرداخت اسان و سریع</p>
                                <form class="row needs-validation" method="post" novalidate="">
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <input class="form-control" type="email" placeholder="ایمیل"
                                                required="">
                                            <div class="invalid-feedback">آدرس ایمیل را وارد کنید</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <input class="form-control" type="password" placeholder="پسورد"
                                                required="">
                                            <div class="invalid-feedback">پسورد را وارد کنید</div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-flex flex-wrap justify-content-between align-items-center"><a
                                                class="nav-link-style" href="#">فراموشی رمز ؟ </a>
                                            <button class="btn btn-primary" type="submit">ورود</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header"><a class="accordion-button collapsed" href="#points"
                                data-bs-toggle="collapse"><i class="ci-gift me-2"></i>ثبت امتیاز</a></h3>
                        <div class="accordion-collapse collapse" id="points" data-bs-parent="#payment-method">
                            <div class="accordion-body">
                                <p>امتیاز جاری شما<span class="fw-medium">&nbsp;384</span>می باشد</p>
                                <div class="form-check d-block">
                                    <input class="form-check-input" type="checkbox" id="use_points">
                                    <label class="form-check-label" for="use_points">از امتیاز برای پرداخت استفاده
                                        میکتید؟</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Navigation (desktop)-->
                <div class="d-none d-lg-flex pt-4">
                    <div class="w-50 pe-3"><a class="btn btn-secondary d-block w-100"
                            href="checkout-shipping.html"><i class="ci-arrow-left mt-sm-0 me-1"></i><span
                                class="d-none d-sm-inline">برگشت به ارسال</span><span
                                class="d-inline d-sm-none">برگشت</span></a></div>
                    <div class="w-50 ps-2"><a class="btn btn-primary d-block w-100" href="checkout-review.html"><span
                                class="d-none d-sm-inline">مرور سفارش</span><span class="d-inline d-sm-none">مرور
                                سفارش</span><i class="ci-arrow-right mt-sm-0 ms-1"></i></a></div>
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
                            href="checkout-shipping.html"><i class="ci-arrow-left mt-sm-0 me-1"></i><span
                                class="d-none d-sm-inline">برگشت به ارسال</span><span
                                class="d-inline d-sm-none">برگشت</span></a></div>
                    <div class="w-50 ps-2"><a class="btn btn-primary d-block w-100" href="checkout-review.html"><span
                                class="d-none d-sm-inline">مرور سفارش</span><span class="d-inline d-sm-none">مرور
                                سفارش</span><i class="ci-arrow-right mt-sm-0 ms-1"></i></a></div>
                </div>
            </div>
        </div>
    </div>
</div>
