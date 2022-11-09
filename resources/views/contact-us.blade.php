@extends('layout.master')

@section('content')
    <div class="bg-secondary py-4">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
            <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb flex-lg-nowrap justify-content-center justify-content-lg-start">
                        <li class="breadcrumb-item"><a class="text-nowrap" href="index-2.html"><i class="ci-home"></i>خانه</a>
                        </li>
                        <li class="breadcrumb-item text-nowrap active" aria-current="page">تماس با ما</li>
                    </ol>
                </nav>
            </div>
            <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
                <h1 class="h3 mb-0">تماس با ما</h1>
            </div>
        </div>
    </div>
    <section class="container-fluid pt-grid-gutter">
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-grid-gutter"><a class="card h-100" href="#map" data-scroll="">
                    <div class="card-body text-center"><i class="ci-location h3 mt-2 mb-4 text-primary"></i>
                        <h3 class="h6 mb-2">آدرس اصلی فروشگاه</h3>
                        <p class="fs-sm text-muted">ایران-یزد</p>
                        <div class="fs-sm text-primary">دیدن روی نقشه<i class="ci-arrow-right align-middle ms-1"></i></div>
                    </div>
                </a></div>
            <div class="col-xl-3 col-sm-6 mb-grid-gutter">
                <div class="card h-100">
                    <div class="card-body text-center"><i class="ci-time h3 mt-2 mb-4 text-primary"></i>
                        <h3 class="h6 mb-3">ساعات کاری</h3>
                        <ul class="list-unstyled fs-sm text-muted mb-0">
                            <li>شنبه تا پنجشنبه : 10 تا 19</li>
                            <li class="mb-0">جمعه 10 تا 4 </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-grid-gutter">
                <div class="card h-100">
                    <div class="card-body text-center"><i class="ci-phone h3 mt-2 mb-4 text-primary"></i>
                        <h3 class="h6 mb-3">شماره تلفن</h3>
                        <ul class="list-unstyled fs-sm mb-0">
                            <li><span class="text-muted me-1">برای مشتری:</span><a class="nav-link-style"
                                    href="tel:+09162352304">09162352304</a></li>
                            <li class="mb-0"><span class="text-muted me-1">برای پشتیبانی</span><a class="nav-link-style"
                                    href="tel:+09162352304">+09162352304</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-grid-gutter">
                <div class="card h-100">
                    <div class="card-body text-center"><i class="ci-mail h3 mt-2 mb-4 text-primary"></i>
                        <h3 class="h6 mb-3">آدرس ایمیل</h3>
                        <ul class="list-unstyled fs-sm mb-0">
                            <li><span class="text-muted me-1">برای مشتری:</span><a class="nav-link-style"
                                    href="mailto:+09162352304">customer@electotec.com</a></li>
                            <li class="mb-0"><span class="text-muted me-1">برای پشتیبانی</span><a class="nav-link-style"
                                    href="mailto:support@example.com">support@electotec.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid px-0" id="map">
        <div class="row g-0">
            <div class="col-lg-6 iframe-full-height-wrap">
                <iframe class="iframe-full-height" width="600" height="250"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53357.14257194912!2d-73.07268695801845!3d40.78017062807504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e8483b8bffed93%3A0x53467ceb834b7397!2s396+Lillian+Blvd%2C+Holbrook%2C+NY+11741%2C+USA!5e0!3m2!1sen!2sua!4v1558703206875!5m2!1sen!2sua" "=""></iframe>
                      </div>
                    <div class="col-lg-6 px-4 px-xl-5 py-5 border-top">
                      <h2 class="h4 mb-4">یک خط بنویسید</h2>
                      <form class="needs-validation mb-3" novalidate="">
                        <div class="row g-3">
                          <div class="col-sm-6">
                            <label class="form-label" for="cf-name">نام شما : <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" id="cf-name" placeholder="ستین" required="">
                            <div class="invalid-feedback">لطفا نام را وارد کنید</div>
                          </div>
                          <div class="col-sm-6">
                            <label class="form-label" for="cf-email">آدرس ایمیل:&nbsp;<span class="text-danger">*</span></label>
                            <input class="form-control" type="email" id="cf-email" placeholder="setin@email.com" required="">
                            <div class="invalid-feedback">آدرس ایمیل را وارد کنید</div>
                          </div>
                          <div class="col-sm-6">
                            <label class="form-label" for="cf-phone">تلفن:<span class="text-danger">*</span></label>
                            <input class="form-control" type="text" id="cf-phone" placeholder="09162352304" required="">
                            <div class="invalid-feedback">شماره تلفن را وارد کنید</div>
                          </div>
                          <div class="col-sm-6">
                            <label class="form-label" for="cf-subject">موضوع:</label>
                            <input class="form-control" type="text" id="cf-subject" placeholder="عنوان کوتاه درخواست خود را ارائه دهید">
                          </div>
                          <div class="col-12">
                            <label class="form-label" for="cf-message">پیام:&nbsp;<span class="text-danger">*</span></label>
                            <textarea class="form-control" id="cf-message" rows="6" placeholder="لطفاً درخواست خود را با جزئیات شرح دهید"
                                required=""></textarea>
                            <div class="invalid-feedback">متن را بنویسید</div>
                            <button class="btn btn-primary mt-4" type="submit">ارسال پیام</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    </div>
                  </div>
@endsection