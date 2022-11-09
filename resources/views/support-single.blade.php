@extends('layout.master')

@section('content')
    <div class="bg-secondary py-4">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
            <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb flex-lg-nowrap justify-content-center justify-content-lg-start">
                        <li class="breadcrumb-item"><a class="text-nowrap" href="index-2.html"><i class="ci-home"></i>خانه</a>
                        </li>
                        <li class="breadcrumb-item text-nowrap"><a href="help-topics.html">مرکز راهنمایی</a>
                        </li>
                        <li class="breadcrumb-item text-nowrap active" aria-current="page">موضوع واحد</li>
                    </ol>
                </nav>
            </div>
            <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
                <h1 class="h3 mb-0">موضوع واحد</h1>
            </div>
        </div>
    </div>
    <div class="container py-5 mt-md-2 mb-2">
        <div class="row">
            <div class="col-lg-3">
                <!-- مقالات مرتبط sidebar-->
                <div class="offcanvas offcanvas-collapse border-end" id="help-sidebar">
                    <div class="offcanvas-header align-items-center shadow-sm">
                        <h2 class="h5 mb-0">مقالات مرتبط</h2>
                        <button class="btn-close ms-auto" type="button" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body py-grid-gutter py-lg-1" data-simplebar="init"
                        data-simplebar-auto-hide="true">
                        <div class="simplebar-wrapper" style="margin: -4px 0px;">
                            <div class="simplebar-height-auto-observer-wrapper">
                                <div class="simplebar-height-auto-observer"></div>
                            </div>
                            <div class="simplebar-mask">
                                <div class="simplebar-offset" style="left: 0px; bottom: 0px;">
                                    <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                        aria-label="scrollable content" style="height: auto; overflow: hidden;">
                                        <div class="simplebar-content" style="padding: 4px 0px;">
                                            <!-- Links-->
                                            <div class="widget widget-links">
                                                <h3 class="widget-title d-none d-lg-block">مقالات مرتبط</h3>
                                                <ul class="widget-list">
                                                    <li class="widget-list-item"><a class="widget-list-link"
                                                            href="#"><i
                                                                class="ci-book opacity-60 align-middle mt-n1 me-1"></i>مدیریت
                                                            حساب</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link"
                                                            href="#"><i
                                                                class="ci-book opacity-60 align-middle mt-n1 me-1"></i>کار
                                                            با داشبورد</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link"
                                                            href="#"><i
                                                                class="ci-book opacity-60 align-middle mt-n1 me-1"></i>روش
                                                            پرداخت</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link"
                                                            href="#"><i
                                                                class="ci-book opacity-60 align-middle mt-n1 me-1"></i>اطلاعات
                                                            تحویل</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link"
                                                            href="#"><i
                                                                class="ci-book opacity-60 align-middle mt-n1 me-1"></i>پیگیری
                                                            سفارش</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link"
                                                            href="#"><i
                                                                class="ci-book opacity-60 align-middle mt-n1 me-1"></i>مرجوعی</a>
                                                    </li>
                                                    <li class="widget-list-item"><a class="widget-list-link"
                                                            href="#"><i
                                                                class="ci-book opacity-60 align-middle mt-n1 me-1"></i>تخفیفات</a>
                                                    </li>
                                                    <li class="widget-list-item"><a class="widget-list-link"
                                                            href="#"><i
                                                                class="ci-book opacity-60 align-middle mt-n1 me-1"></i>امتیاز</a>
                                                    </li>
                                                    <li class="widget-list-item"><a class="widget-list-link"
                                                            href="#"><i
                                                                class="ci-book opacity-60 align-middle mt-n1 me-1"></i>بسته
                                                            های وابسته</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link"
                                                            href="#"><i
                                                                class="ci-book opacity-60 align-middle mt-n1 me-1"></i>پیشنهاد
                                                            خرید</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link"
                                                            href="#"><i
                                                                class="ci-book opacity-60 align-middle mt-n1 me-1"></i>شرایط
                                                            خدمات</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link"
                                                            href="#"><i
                                                                class="ci-book opacity-60 align-middle mt-n1 me-1"></i>سوالات
                                                            پر طرافدار</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="simplebar-placeholder" style="width: auto; height: 386px;"></div>
                        </div>
                        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                            <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                        </div>
                        <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                            <div class="simplebar-scrollbar" style="height: 0px; display: none;"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-9">
                <h2 class="h4 pb-3">فعال کردن روش پرداخت</h2>
                <p class="fs-md">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                    است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد
                    نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد کتابهای زیادی در شصت و سه درصد گذشته حال و
                    آینده</p>
                <p class="fs-md">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                    است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد
                    نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد کتابهای زیادی در شصت و سه درصد گذشته حال و
                    آینده</p>
                <div class="row pt-3 pb-4 mb-2 mb-md-4">
                    <div class="col-md-7"><img class="w-100 img-thumbnail" src="/img/about/02.jpg"
                            style="max-width: 508px;" alt="Help image"></div>
                    <div class="col-md-5 pt-4">
                        <h3 class="h6">مزایای گزینه های پرداخت ما</h3>
                        <ul class="list-unstyled fs-sm pt-2">
                            <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>اما
                                    این نیاز به یک ساده و آسان دارد</span></li>
                            <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>اما
                                    این نیاز به یک ساده و آسان دارد</span></li>
                            <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>اما
                                    این نیاز به یک ساده و آسان دارد</span></li>
                            <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>اما
                                    این نیاز به یک ساده و آسان دارد</span></li>
                            <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>چه
                                    کسی حق نقد دارد</span></li>
                            <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>چه
                                    کسی حق نقد دارد</span></li>
                        </ul>
                    </div>
                </div>
                <h2 class="h4 pb-3">جزئیات روش ها</h2>
                <div class="accordion accordion-flush" id="methods">
                    <div class="accordion-item">
                        <h3 class="accordion-header"><a class="accordion-button" href="#methodOne" role="button"
                                data-bs-toggle="collapse" aria-expanded="false" aria-controls="methodOne">کارت های
                                اعتباری / بدهی</a></h3>
                        <div class="accordion-collapse collapse show" id="methodOne" data-bs-parent="#methods">
                            <div class="card-body fs-md">
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                    است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                                    تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد کتابهای زیادی
                                    در شصت و سه درصد گذشته حال و آینده</p>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                    است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                                    تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد کتابهای زیادی
                                    در شصت و سه درصد گذشته حال و آینده</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header"><a class="accordion-button collapsed" href="#methodTwo"
                                role="button" data-bs-toggle="collapse" aria-expanded="false"
                                aria-controls="methodTwo">پرداخت با پی پال</a></h3>
                        <div class="accordion-collapse collapse" id="methodTwo" data-bs-parent="#methods">
                            <div class="card-body fs-md">
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                    است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                                    تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد کتابهای زیادی
                                    در شصت و سه درصد گذشته حال و آینده</p>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                    است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                                    تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد کتابهای زیادی
                                    در شصت و سه درصد گذشته حال و آینده</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header"></h3><a class="accordion-button collapsed" href="#methodThree"
                            role="button" data-bs-toggle="collapse" aria-expanded="false"
                            aria-controls="methodThree">ثبت امتیاز</a>
                        <div class="accordion-collapse collapse" id="methodThree" data-bs-parent="#methods">
                            <div class="card-body fs-md">
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                    است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                                    تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد کتابهای زیادی
                                    در شصت و سه درصد گذشته حال و آینده</p>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                    است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                                    تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد کتابهای زیادی
                                    در شصت و سه درصد گذشته حال و آینده</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ارسال درخواست-->
                <section class="container text-center pt-5 mt-2">
                    <h2 class="h4 pb-3">جواب پیدا نکردید؟ ما می توانیم کمک کنیم</h2><i
                        class="ci-help h3 text-primary d-block mb-4"></i><a class="btn btn-primary"
                        href="{{ route('support.request') }}">ارسال درخواست</a>
                    <p class="fs-sm pt-4">با ما تماس بگیرید و ما در اسرع وقت به شما پاسخ خواهیم داد.</p>
                </section>
            </div>
        </div>
    </div>
@endsection
