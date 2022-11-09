<div>
    <x-page.profile.title />
    <div class="container pb-5 mb-2 mb-md-4">
        <div class="row">
            <x-page.profile.sidebar />
            <!-- Content  -->
            <section class="col-lg-8">
                <!-- Toolbar-->
                <div class="d-none d-lg-flex justify-content-between align-items-center pt-lg-3 pb-4 pb-lg-5 mb-lg-4">
                    <div class="d-flex w-100 text-light text-center me-3">
                        <div class="fs-ms px-3">
                            <div class="fw-medium">تاریخ ارسال</div>
                            <div class="opacity-60">11/06/1401</div>
                        </div>
                        <div class="fs-ms px-3">
                            <div class="fw-medium">اخرین به روز رسانی</div>
                            <div class="opacity-60">11/06/1401</div>
                        </div>
                        <div class="fs-ms px-3">
                            <div class="fw-medium">نوع</div>
                            <div class="opacity-60">مشکل وب سایت</div>
                        </div>
                        <div class="fs-ms px-3">
                            <div class="fw-medium">اولویت</div><span class="badge bg-warning">بالا</span>
                        </div>
                        <div class="fs-ms px-3">
                            <div class="fw-medium">وضعیت</div><span class="badge bg-success">باز</span>
                        </div>
                    </div><a class="btn btn-primary btn-sm" href="account-signin.html"><i
                            class="ci-sign-out me-2"></i>خروج</a>
                </div>
                <!-- Ticket details (visible on mobile)-->
                <div class="d-flex d-lg-none flex-wrap bg-secondary text-center rounded-3 pt-4 px-4 pb-1 mb-4">
                    <div class="fs-sm px-3 pb-3">
                        <div class="fw-medium">تاریخ ارسال</div>
                        <div class="text-muted">11/06/1401</div>
                    </div>
                    <div class="fs-sm px-3 pb-3">
                        <div class="fw-medium">اخرین به روز رسانی</div>
                        <div class="text-muted">11/06/1401</div>
                    </div>
                    <div class="fs-sm px-3 pb-3">
                        <div class="fw-medium">نوع</div>
                        <div class="text-muted">مشکل وب سایت</div>
                    </div>
                    <div class="fs-sm px-3 pb-3">
                        <div class="fw-medium">اولویت</div><span class="badge bg-warning">بالا</span>
                    </div>
                    <div class="fs-sm px-3 pb-3">
                        <div class="fw-medium">وضعیت</div><span class="badge bg-success">باز</span>
                    </div>
                </div>
                <!-- Comment-->
                <div class="d-flex align-items-start pb-4 border-bottom"><img class="rounded-circle"
                        src="img/testimonials/03.jpg" width="50" alt="مایکل دیویس">
                    <div class="ps-3">
                        <h6 class="fs-md mb-2">مایکل دیویس</h6>
                        <p class="fs-md mb-1">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                            طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای
                            شرایط فعلی تکنولوژی مورد نیاز</p><span class="fs-ms text-muted"><i
                                class="ci-time align-middle me-2"></i>24 تیر 1400 ساعت 11:00</span>
                    </div>
                </div>
                <!-- Comment reply-->
                <div class="d-flex align-items-start py-4 border-bottom"><img class="rounded-circle"
                        src="img/testimonials/03.jpg" width="50" alt="مایکل دیویس">
                    <div class="ps-3">
                        <h6 class="fs-md mb-2">مایکل دیویس</h6>
                        <p class="fs-md mb-1">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                            طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای
                            شرایط فعلی تکنولوژی مورد نیاز</p><span class="fs-ms text-muted"><i
                                class="ci-time align-middle me-2"></i>24 تیر 1400 ساعت 11:00</span>
                        <!-- Comment-->
                        <div class="d-flex align-items-start border-top pt-4 mt-4"><img class="rounded-circle"
                                src="img/testimonials/04.jpg" width="50" alt="سوزان گاردنر">
                            <div class="ps-3">
                                <h6 class="fs-md mb-2">سوزان گاردنر</h6>
                                <p class="fs-md mb-1">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                    استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان
                                    که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز</p><span
                                    class="fs-ms text-muted"><i class="ci-time align-middle me-2"></i>24 تیر 1400 ساعت
                                    11:00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Leave message-->
                <h3 class="h5 mt-2 pt-4 pb-2">یک پیام بگذارید</h3>
                <form class="needs-validation" novalidate="">
                    <div class="mb-3">
                        <textarea class="form-control" rows="8" placeholder="پیام خود را اینجا بنویسید ..." required=""></textarea>
                        <div class="invalid-tooltip">لطفا پیام را بنویسید</div>
                    </div>
                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="close-ticket">
                            <label class="form-check-label" for="close-ticket">تیکت را ارسال و ببند</label>
                        </div>
                        <button class="btn btn-primary my-2" type="submit">ارسال پیام</button>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>
