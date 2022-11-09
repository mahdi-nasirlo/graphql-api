@extends('layout.master')

@section('content')
    <section class="position-relative bg-dark bg-size-cover bg-position-center-x position-relative py-5 mb-5"
        style="background-image: url(img/pages/help-hero-bg.jpg);"><span
            class="position-absolute top-0 start-0 w-100 h-100 bg-darker" style="opacity: .65;"></span>
        <div class="container position-relative zindex-5 py-4 my-3">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h1 class="text-light text-center">چطور میتوانیم کمک کنیم؟</h1>
                    <p class="pb-3 text-light text-center">سوال بپرس. موضوعات را مرور کنید. پاسخ ها را پیدا کنید</p>
                    <div class="input-group input-group-lg mb-3"><i
                            class="ci-search position-absolute top-50 translate-middle-y text-muted fs-base ms-3"></i>
                        <input class="form-control rounded-start" type="search" placeholder="سوالت را بپرس...">
                    </div>
                    <div class="fs-sm"><span class="text-light opacity-50 me-1">پیشنهادات: </span><a
                            class="nav-link-style nav-link-light me-1 pb-1 border-bottom border-light" href="#">
                            داشبورد,</a><a class="nav-link-style nav-link-light me-1 pb-1 border-bottom border-light"
                            href="#">پرداخت,</a><a
                            class="nav-link-style nav-link-light me-1 pb-1 border-bottom border-light" href="#">
                            مرجوعی,</a><a class="nav-link-style nav-link-light me-1 pb-1 border-bottom border-light"
                            href="#"> تحویل</a></div>
                </div>
            </div>
        </div>
    </section>
    <section class="container py-3">
        <h2 class="h3 text-center">انتخاب یک موضوع</h2>
        <div class="row pt-4">
            <div class="col-lg-4 col-sm-6 mb-grid-gutter">
                <div class="card border-0 shadow">
                    <div class="card-body text-center"><i class="ci-user-circle h2 mt-2 mb-4 text-primary"></i>
                        <h6>مدیریت کاربری</h6>
                        <p class="fs-sm text-muted pb-2">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                            استفاده از طراحان گرافیک است</p><a class="btn btn-outline-primary btn-sm stretched-link mb-2"
                            href="{{ route('support.single') }}">بیشتر بدانید</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-grid-gutter">
                <div class="card border-0 shadow">
                    <div class="card-body text-center"><i class="ci-laptop h2 mt-2 mb-4 text-primary"></i>
                        <h6>کار با داشبورد</h6>
                        <p class="fs-sm text-muted pb-2">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                            استفاده از طراحان گرافیک است</p><a class="btn btn-outline-primary btn-sm stretched-link mb-2"
                            href="{{ route('support.single') }}">بیشتر بدانید</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-grid-gutter">
                <div class="card border-0 shadow">
                    <div class="card-body text-center"><i class="ci-card h2 mt-2 mb-4 text-primary"></i>
                        <h6>گزینه های پرداخت</h6>
                        <p class="fs-sm text-muted pb-2">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                            استفاده از طراحان گرافیک است</p><a class="btn btn-outline-primary btn-sm stretched-link mb-2"
                            href="{{ route('support.single') }}">بیشتر بدانید</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-grid-gutter">
                <div class="card border-0 shadow">
                    <div class="card-body text-center"><i class="ci-delivery h2 mt-2 mb-4 text-primary"></i>
                        <h6>اطلاعات تحویل</h6>
                        <p class="fs-sm text-muted pb-2">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                            استفاده از طراحان گرافیک است</p><a class="btn btn-outline-primary btn-sm stretched-link mb-2"
                            href="{{ route('support.single') }}">بیشتر بدانید</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-grid-gutter">
                <div class="card border-0 shadow">
                    <div class="card-body text-center"><i class="ci-currency-exchange h2 mt-2 mb-4 text-primary"></i>
                        <h6>مرجوعی</h6>
                        <p class="fs-sm text-muted pb-2">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                            استفاده از طراحان گرافیک است</p><a class="btn btn-outline-primary btn-sm stretched-link mb-2"
                            href="{{ route('support.single') }}">بیشتر بدانید</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-grid-gutter">
                <div class="card border-0 shadow">
                    <div class="card-body text-center"><i class="ci-loudspeaker h2 mt-2 mb-4 text-primary"></i>
                        <h6>بسته های وابسته</h6>
                        <p class="fs-sm text-muted pb-2">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                            استفاده از طراحان گرافیک است</p><a class="btn btn-outline-primary btn-sm stretched-link mb-2"
                            href="{{ route('support.single') }}">بیشتر بدانید</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container pt-4 pb-5">
        <h2 class="h3 text-center">سوالات متداول</h2>
        <div class="row pt-4">
            <div class="col-sm-6">
                <ul class="list-unstyled">
                    <li class="mb-0"><a class="nav-link-style d-flex align-items-center border-bottom pb-3 mb-3"
                            href="#"><i class="ci-book opacity-60 me-2"></i><span>چه مدت تحویل داده خواهد
                                شد؟</span></a></li>
                    <li class="mb-0"><a class="nav-link-style d-flex align-items-center border-bottom pb-3 mb-3"
                            href="#"><i class="ci-book opacity-60 me-2"></i><span>آیا حمل و نقل بین المللی
                                دارید؟</span></a></li>
                    <li class="mb-0"><a class="nav-link-style d-flex align-items-center border-bottom pb-3 mb-3"
                            href="#"><i class="ci-book opacity-60 me-2"></i><span>آیا برای ثبت سفارش به حساب کاربری
                                نیاز دارم؟</span></a></li>
                    <li class="mb-0"><a class="nav-link-style d-flex align-items-center border-bottom pb-3 mb-3"
                            href="#"><i class="ci-book opacity-60 me-2"></i><span>چگونه می توانم سفارش خود را پیگیری
                                کنم؟</span></a></li>
                    <li class="mb-0"><a class="nav-link-style d-flex align-items-center border-bottom pb-3 mb-3"
                            href="#"><i class="ci-book opacity-60 me-2"></i><span>آیا حمل و نقل بین المللی
                                دارید؟</span></a></li>
                </ul>
            </div>
            <div class="col-sm-6">
                <ul class="list-unstyled">
                    <li class="mb-0"><a class="nav-link-style d-flex align-items-center border-bottom pb-3 mb-3"
                            href="#"><i class="ci-book opacity-60 me-2"></i><span>شرایط بازپرداخت محصول
                                چیست؟</span></a></li>
                    <li class="mb-0"><a class="nav-link-style d-flex align-items-center border-bottom pb-3 mb-3"
                            href="#"><i class="ci-book opacity-60 me-2"></i><span>آیا برای بازگشت مشتری تخفیف
                                دارید؟</span></a></li>
                    <li class="mb-0"><a class="nav-link-style d-flex align-items-center border-bottom pb-3 mb-3"
                            href="#"><i class="ci-book opacity-60 me-2"></i><span>برنامه ارجاع شما چگونه کار می
                                کند؟</span></a></li>
                    <li class="mb-0"><a class="nav-link-style d-flex align-items-center border-bottom pb-3 mb-3"
                            href="#"><i class="ci-book opacity-60 me-2"></i><span>از کجا می توان فاکتورهای سفارشات
                                من را مشاهده و بارگیری کرد؟</span></a></li>
                    <li class="mb-0"><a class="nav-link-style d-flex align-items-center border-bottom pb-3 mb-3"
                            href="#"><i class="ci-book opacity-60 me-2"></i><span>آیا بعد از خرید پشتیبانی فنی می
                                کنید؟</span></a></li>
                </ul>
            </div>
        </div>
    </section>
    <section class="container text-center pt-1 pb-5 mb-2">
        <h2 class="h4 pb-3">جواب پیدا نکردید؟ ما می توانیم کمک کنیم</h2><i
            class="ci-help h3 text-primary d-block mb-4"></i><a class="btn btn-primary"
            href="{{ route('support.request') }}">ارسال درخواست</a>
        <p class="fs-sm pt-4">با ما تماس بگیرید و ما در اسرع وقت به شما پاسخ خواهیم داد.</p>
    </section>
@endsection
