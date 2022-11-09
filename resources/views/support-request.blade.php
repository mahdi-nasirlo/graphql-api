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
                <div class="alert alert-info d-flex fs-sm mb-4" role="alert">
                    <div class="alert-icon"><i class="ci-announcement"></i></div>
                    <div>تیم پشتیبانی دوستانه ما همیشه در اینجا است تا به شما کمک کند. با انتخاب موضوعی که می توانیم به شما
                        کمک کنیم ، شروع کنید.</div>
                </div>
                <form class="needs-validation" novalidate="">
                    <div class="row gx-4 gy-3">
                        <div class="col-sm-6">
                            <label class="form-label" for="help-topic">انتخاب یک موضوع <strong
                                    class="text-danger">*</strong></label>
                            <select class="form-select" required="" id="help-topic">
                                <option value="">—</option>
                                <option value="مدیریت حساب">مدیریت حساب</option>
                                <option value="کار با داشبورد">کار با داشبورد</option>
                                <option value="روش های پرداخت">روش های پرداخت</option>
                                <option value="اطلاعات تحویل">اطلاعات تحویل</option>
                                <option value="مرجوعی">مرجوعی</option>
                                <option value="بسته های وابسته">برنامه های جانبی</option>
                            </select>
                            <div class="invalid-feedback">لطفا یک موضوع را انتخاب کنید!</div>
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="help-subject">درخواست موضوع </label>
                            <input class="form-control" type="text" id="help-subject">
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="help-message">درخواست پیام <strong
                                    class="text-danger">*</strong></label>
                            <textarea class="form-control" rows="6" required="" id="help-message"></textarea>
                            <div class="invalid-feedback">لطفاً شرح مفصلی از مشکل خود ارائه دهید!</div>
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="help-name">نام شما <strong
                                    class="text-danger">*</strong></label>
                            <input class="form-control" type="text" required="" id="help-name">
                            <div class="invalid-feedback">نام را وارد کنید</div>
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="help-email">ایمیل شما <strong
                                    class="text-danger">*</strong></label>
                            <input class="form-control" type="email" required="" id="help-email">
                            <div class="invalid-feedback">آدرس ایمیل را وارد کنید</div>
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="help-url">لینک را وارد کنید</label>
                            <input class="form-control" type="text" id="help-url">
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="help-file">پیویست</label>
                            <input class="form-control" type="file" id="help-file">
                        </div>
                        <div class="col-12 pt-2">
                            <button class="btn btn-primary me-4" type="submit">ارسال درخواست</button><a
                                class="nav-link-style fw-medium d-inline-block align-middle fs-sm py-2" href="#">
                                <u>سیاست حفظ حریم خصوصی</u></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
