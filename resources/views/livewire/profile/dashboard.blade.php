<div>
    <x-page.profile.title />
    <div class="container pb-5 mb-2 mb-md-4">
        <div class="row">
            <x-page.profile.sidebar />
            <!-- Content  -->
            <section class="col-lg-8">
                <!-- Toolbar-->
                <div class="d-none d-lg-flex justify-content-between align-items-center pt-lg-3 pb-4 pb-lg-5 mb-lg-3">
                    <h6 class="fs-base text-light mb-0">جزئیات نمایه خود را در زیر به روز کنید:</h6><a
                        class="btn btn-primary btn-sm" href="account-signin.html"><i class="ci-sign-out me-2"></i>خروج</a>
                </div>
                <!-- Profile form-->
                <form>
                    <div class="bg-secondary rounded-3 p-4 mb-4">
                        <div class="d-flex align-items-center"><img class="rounded" src="img/shop/account/avatar.jpg"
                                width="90" alt="سوزان گاردنر">
                            <div class="ps-3">
                                <button class="btn btn-light btn-shadow btn-sm mb-2" type="button"><i
                                        class="ci-loading me-2"></i>آواتار را تغییر دهید</button>
                                <div class="p mb-0 fs-ms text-muted">تصویر JPG ، GIF یا PNG را بارگذاری کنید. 300 *300
                                    مورد نیاز است.</div>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-4 gy-3">
                        <div class="col-sm-6">
                            <label class="form-label" for="account-fn">نام کوچک</label>
                            <input class="form-control" type="text" id="account-fn" value="نام کوچک">
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="account-ln">نام خانوادگی</label>
                            <input class="form-control" type="text" id="account-ln" value="نام خانوادگی">
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="account-email">آدرس ایمیل</label>
                            <input class="form-control" type="email" id="account-email" value="Setin@gmail.com"
                                disabled="">
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="account-phone">شماره تلفن</label>
                            <input class="form-control" type="text" id="account-phone" value="09162352304"
                                required="">
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="account-pass">پسورد جدید</label>
                            <div class="password-toggle">
                                <input class="form-control" type="password" id="account-pass">
                                <label class="password-toggle-btn" aria-label="نمایش/پنهان کردن">
                                    <input class="password-toggle-check" type="checkbox"><span
                                        class="password-toggle-indicator"></span>
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="account-confirm-pass">تکرار پسورد</label>
                            <div class="password-toggle">
                                <input class="form-control" type="password" id="account-confirm-pass">
                                <label class="password-toggle-btn" aria-label="نمایش/پنهان کردن">
                                    <input class="password-toggle-check" type="checkbox"><span
                                        class="password-toggle-indicator"></span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <hr class="mt-2 mb-3">
                            <div class="d-flex flex-wrap justify-content-between align-items-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="subscribe_me" checked="">
                                    <label class="form-check-label" for="subscribe_me">من را در خبرنامه مشترک
                                        کنید</label>
                                </div>
                                <button class="btn btn-primary mt-3 mt-sm-0" type="button">بروزرسانی پروفایل</button>
                            </div>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>
