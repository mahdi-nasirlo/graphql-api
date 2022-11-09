  <!-- Sidebar-->
  <aside class="col-lg-4 pt-4 pt-lg-0 pe-xl-5">
      <div class="bg-white rounded-3 shadow-lg pt-1 mb-5 mb-lg-0">
          <div class="d-md-flex justify-content-between align-items-center text-center text-md-start p-4">
              <div class="d-md-flex align-items-center">
                  <div class="img-thumbnail rounded-circle position-relative flex-shrink-0 mx-auto mb-2 mx-md-0 mb-md-0"
                      style="width: 6.375rem;"><span class="badge bg-warning position-absolute end-0 mt-n2"
                          data-bs-toggle="tooltip" title="" data-bs-original-title="Reward points">384</span><img
                          class="rounded-circle" src="img/shop/account/avatar.jpg" alt="سوزان گاردنر"></div>
                  <div class="ps-md-3">
                      <h3 class="fs-base mb-0">سوزان گاردنر</h3><span class="text-accent fs-sm">Setin@gmail.com</span>
                  </div>
              </div><a class="btn btn-primary d-lg-none mb-2 mt-3 mt-md-0" href="#account-menu"
                  data-bs-toggle="collapse" aria-expanded="false"><i class="ci-menu me-2"></i>منو</a>
          </div>
          <div class="d-lg-block collapse" id="account-menu">
              <div class="bg-secondary px-4 py-3">
                  <h3 class="fs-sm mb-0 text-muted">داشبورد</h3>
              </div>
              <ul class="list-unstyled mb-0">
                  <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3"
                          href="{{ route('profile.order') }}"><i class="ci-bag opacity-60 me-2"></i>سفارشات<span
                              class="fs-sm text-muted ms-auto">1</span></a></li>
                  <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3"
                          href="{{ route('profile.like') }}"><i class="ci-heart opacity-60 me-2"></i>علاقه مندی<span
                              class="fs-sm text-muted ms-auto">3</span></a></li>
                  <li class="mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3"
                          href="{{ route('profile.ticket') }}"><i class="ci-help opacity-60 me-2"></i>تیکت<span
                              class="fs-sm text-muted ms-auto">1</span></a></li>
              </ul>
              <div class="bg-secondary px-4 py-3">
                  <h3 class="fs-sm mb-0 text-muted">تنظیمات حساب</h3>
              </div>
              <ul class="list-unstyled mb-0">
                  <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3 active"
                          href="{{ route('profile.dashboard') }}"><i class="ci-user opacity-60 me-2"></i>پروفایل</a>
                  </li>
                  <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3"
                          href="{{ route('profile.address') }}"><i class="ci-location opacity-60 me-2"></i>آدرس ها</a>
                  </li>
                  {{-- <li class="mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3"
                          href="account-payment.html"><i class="ci-card opacity-60 me-2"></i>روش پرداخت</a>
                  </li> --}}
                  <li class="d-lg-none border-top mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3"
                          href="account-signin.html"><i class="ci-sign-out opacity-60 me-2"></i>خروج</a></li>
              </ul>
          </div>
      </div>
  </aside>
