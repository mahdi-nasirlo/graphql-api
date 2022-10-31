@php
    $categories = \App\Models\Category::with(['children'])
        ->where('level', 0)
        ->get();
@endphp

@if ($categories->count() > 0)
    <!-- Departments menu-->
    <style>
        .dropdown-item:hover svg {
            fill: red;
        }

        .dropdown-item svg {
            fill: grey;
        }
    </style>
    <ul class="navbar-nav navbar-mega-nav pe-lg-2 me-lg-2">
        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle ps-lg-0" href="#" data-bs-toggle="dropdown"
                data-bs-auto-close="outside"><i class="ci-menu align-middle mt-n1 me-2"></i>بخش ها</a>
            <ul class="dropdown-menu">

                @foreach ($categories as $category)
                    <li class="dropdown mega-dropdown">
                        <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">
                            {{-- <x-icon class="ci-laptop opacity-60 fs-lg me-2" name="{{ $category->icon }}"
                                        /> --}}
                            {{-- <i class="ci-laptop opacity-60 fs-lg mt-n1 me-2"></i> --}}
                            {{ $category->name }}
                        </a>
                        @if ($category->hasChildren())
                            <div class="dropdown-menu p-0">
                                <div class="d-flex flex-wrap flex-sm-nowrap px-2">
                                    @foreach ($category->children as $child)
                                        <div class="mega-dropdown-column pt-4 pb-0 py-sm-4 px-3">
                                            <div class="widget widget-links">
                                                <h6 class="fs-base mb-3">{{ $child->name }}</h6>
                                                @if ($child->hasChildren())
                                                    <ul class="widget-list">
                                                        @foreach ($child->children as $subCategory)
                                                            <li class="widget-list-item pb-1">
                                                                <a class="widget-list-link" href="#">
                                                                    {{ $subCategory->name }}
                                                                </a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="mega-dropdown-column d-none d-lg-block py-4 text-center">
                                        <a class="d-block mb-2" href="#">
                                            <img src="img/shop/departments/07.jpg" alt="کامپیوتر و تجهیزات"></a>
                                        <div class="fs-sm mb-3">شروع میشود از <span
                                                class='fw-medium'>149.<small>80</small></span>
                                        </div><a class="btn btn-primary btn-shadow btn-sm" href="#">دیدن
                                            تخفیفات<i class="ci-arrow-right fs-xs ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </li>
                @endforeach

                {{-- <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                     data-bs-toggle="dropdown"><i class="ci-mobile opacity-60 fs-lg mt-n1 me-2"></i>تلفن های هوشمند و
                     تبلت ها</a>
                 <div class="dropdown-menu p-0">
                     <div class="d-flex flex-wrap flex-md-nowrap px-2">
                         <div class="mega-dropdown-column pt-4 pb-0 py-sm-4 px-3">
                             <div class="widget widget-links mb-3">
                                 <h6 class="fs-base mb-3">تلفن های هوشمند</h6>
                                 <ul class="widget-list">
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">ایفون</a>
                                     </li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">اندروید</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">تبلت</a>
                                     </li>
                                 </ul>
                             </div>
                             <div class="widget widget-links">
                                 <h6 class="fs-base">تبلت</h6>
                                 <ul class="widget-list">
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">ایفون</a>
                                     </li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">اندروید</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">تبلت</a>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                         <div class="mega-dropdown-column py-4 px-3">
                             <div class="widget widget-links">
                                 <h6 class="fs-base mb-3">تجهیزات جانبی</h6>
                                 <ul class="widget-list">
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">موس</a>
                                     </li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">کابل</a>
                                     </li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">شارژر</a>
                                     </li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">
                                             تجهیزات جانبی</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">موس</a>
                                     </li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">کابل</a>
                                     </li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">شارژر</a>
                                     </li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">
                                             تجهیزات جانبی</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">کابل</a>
                                     </li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">شارژر</a>
                                     </li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">
                                             تجهیزات جانبی</a></li>
                                 </ul>
                             </div>
                         </div>
                         <div class="mega-dropdown-column d-none d-lg-block py-4 text-center">
                             <a class="d-block mb-2" href="#"><img src="img/shop/departments/09.jpg"
                                     alt="تلفن های هوشمند و تبلت ها"></a>
                             <div class="fs-sm mb-3">شروع میشود از <span
                                     class='fw-medium'>127.<small>00</small></span></div><a
                                 class="btn btn-primary btn-shadow btn-sm" href="#">دیدن
                                 تخفیفات<i class="ci-arrow-right fs-xs ms-1"></i></a>
                         </div>
                     </div>
                 </div>
             </li>
             <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                     data-bs-toggle="dropdown"><i class="ci-monitor opacity-60 fs-lg mt-n1 me-2"></i>تی وی</a>
                 <div class="dropdown-menu p-0">
                     <div class="d-flex flex-wrap flex-md-nowrap px-2">
                         <div class="mega-dropdown-column pt-4 pb-0 py-sm-4 px-3">
                             <div class="widget widget-links">
                                 <h6 class="fs-base mb-3">تی وی و ویدیو</h6>
                                 <ul class="widget-list">
                                     <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">تی
                                             وی</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">سینما
                                             خانوادگی</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">عینک
                                             ویدیوی</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">تی
                                             وی</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">سینما
                                             خانوادگی</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">عینک
                                             ویدیوی</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">تی
                                             وی</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">سینما
                                             خانوادگی</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">عینک
                                             ویدیوی</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">تی
                                             وی</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">سینما
                                             خانوادگی</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">عینک
                                             ویدیوی</a></li>
                                 </ul>
                             </div>
                         </div>
                         <div class="mega-dropdown-column pt-0 pb-4 py-sm-4 px-3">
                             <div class="widget widget-links">
                                 <ul class="widget-list">
                                     <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">تی
                                             وی</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">سینما
                                             خانوادگی</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">عینک
                                             ویدیوی</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">تی
                                             وی</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">سینما
                                             خانوادگی</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">عینک
                                             ویدیوی</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">سینما
                                             خانوادگی</a></li>
                                 </ul>
                             </div>
                         </div>
                         <div class="mega-dropdown-column d-none d-lg-block py-4 text-center">
                             <a class="d-block mb-2" href="#"><img src="img/shop/departments/08.jpg"
                                     alt="TV, Video &amp; Audio"></a>
                             <div class="fs-sm mb-3">شروع میشود از <span class='fw-medium'>78.<small>00</small></span>
                             </div><a class="btn btn-primary btn-shadow btn-sm" href="#">دیدن
                                 تخفیفات<i class="ci-arrow-right fs-xs ms-1"></i></a>
                         </div>
                     </div>
                 </div>
             </li>
             <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                     data-bs-toggle="dropdown"><i class="ci-camera opacity-60 fs-lg mt-n1 me-2"></i>دوربین</a>
                 <div class="dropdown-menu p-0">
                     <div class="d-flex flex-wrap flex-md-nowrap px-2">
                         <div class="mega-dropdown-column pt-4 pb-0 py-sm-4 px-3">
                             <div class="widget widget-links">
                                 <h6 class="fs-base mb-3">دوربین</h6>
                                 <ul class="widget-list">
                                     <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">کیف
                                             و
                                             موارد</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">لنز</a>
                                     </li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">دوربین
                                             کوچک</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">کیف
                                             و
                                             موارد</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">لنز</a>
                                     </li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">دوربین
                                             کوچک</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">کیف
                                             و
                                             موارد</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">لنز</a>
                                     </li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">دوربین
                                             کوچک</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">کیف
                                             و
                                             موارد</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">لنز</a>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                         <div class="mega-dropdown-column py-4 px-3">
                             <div class="widget widget-links">
                                 <h6 class="fs-base mb-3">تجهیزات جانبی</h6>
                                 <ul class="widget-list">
                                     <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">کیف
                                             و
                                             موارد</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">لنز</a>
                                     </li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">باتری
                                             و شارژر</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">کابل</a>
                                     </li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">تجهیزات
                                             جانبی</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">کیف
                                             و
                                             موارد</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">لنز</a>
                                     </li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">باتری
                                             و شارژر</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">کابل</a>
                                     </li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">تجهیزات
                                             جانبی</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">لنز</a>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                         <div class="mega-dropdown-column d-none d-lg-block py-4 text-center">
                             <a class="d-block mb-2" href="#"><img src="img/shop/departments/10.jpg"
                                     alt="Cameras, Photo &amp; Video"></a>
                             <div class="fs-sm mb-3">شروع میشود از <span
                                     class='fw-medium'>210.<small>00</small></span></div><a
                                 class="btn btn-primary btn-shadow btn-sm" href="#">دیدن
                                 تخفیفات<i class="ci-arrow-right fs-xs ms-1"></i></a>
                         </div>
                     </div>
                 </div>
             </li>
             <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                     data-bs-toggle="dropdown"><i class="ci-earphones opacity-60 fs-lg mt-n1 me-2"></i>هدفون</a>
                 <div class="dropdown-menu p-0">
                     <div class="d-flex flex-wrap flex-md-nowrap px-2">
                         <div class="mega-dropdown-column pt-4 pb-0 py-sm-4 px-3">
                             <div class="widget widget-links">
                                 <h6 class="fs-base mb-3">هدفون گوش</h6>
                                 <ul class="widget-list">
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">هدفون
                                             گوش</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">هدفون
                                             گوش</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">هدفون
                                         </a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">هدفون
                                         </a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">هدفون
                                             گوش</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">هدفون
                                             گوش</a></li>
                                 </ul>
                             </div>
                         </div>
                         <div class="mega-dropdown-column py-4 px-3">
                             <div class="widget widget-links">
                                 <h6 class="fs-base mb-3">تجهیزات جانبی</h6>
                                 <ul class="widget-list">
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">رابط</a>
                                     </li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">کابل</a>
                                     </li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">رابط</a>
                                     </li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">کابل</a>
                                     </li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">رابط</a>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                         <div class="mega-dropdown-column d-none d-lg-block py-4 text-center">
                             <a class="d-block mb-2" href="#"><img src="img/shop/departments/11.jpg"
                                     alt="Headphones"></a>
                             <div class="fs-sm mb-3">شروع میشود از <span class='fw-medium'>35.<small>99</small></span>
                             </div><a class="btn btn-primary btn-shadow btn-sm" href="#">دیدن
                                 تخفیفات<i class="ci-arrow-right fs-xs ms-1"></i></a>
                         </div>
                     </div>
                 </div>
             </li>
             <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                     data-bs-toggle="dropdown"><i class="ci-watch opacity-60 fs-lg mt-n1 me-2"></i>الکترونیکی</a>
                 <div class="dropdown-menu p-0">
                     <div class="d-flex flex-wrap flex-md-nowrap px-2">
                         <div class="mega-dropdown-column py-4 px-3">
                             <div class="widget widget-links">
                                 <h6 class="fs-base mb-3">گجت ها</h6>
                                 <ul class="widget-list">
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">کوچک</a>
                                     </li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">چیپ</a>
                                     </li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">گلس</a>
                                     </li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">کوچک</a>
                                     </li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">چیپ</a>
                                     </li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">گلس</a>
                                     </li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">تجهیزات
                                             جانبی</a></li>
                                 </ul>
                             </div>
                         </div>
                         <div class="mega-dropdown-column d-none d-lg-block py-4 text-center">
                             <a class="d-block mb-2" href="#"><img src="img/shop/departments/12.jpg"
                                     alt="Wearable Electronics"></a>
                             <div class="fs-sm mb-3">شروع میشود از <span class='fw-medium'>79.<small>50</small></span>
                             </div><a class="btn btn-primary btn-shadow btn-sm" href="#">دیدن
                                 تخفیفات<i class="ci-arrow-right fs-xs ms-1"></i></a>
                         </div>
                     </div>
                 </div>
             </li>
             <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                     data-bs-toggle="dropdown"><i class="ci-printer opacity-60 fs-lg mt-n1 me-2"></i>پرینتر</a>
                 <div class="dropdown-menu p-0">
                     <div class="d-flex flex-wrap flex-md-nowrap px-2">
                         <div class="mega-dropdown-column pt-4 pb-0 py-sm-4 px-3">
                             <div class="widget widget-links mb-3">
                                 <h6 class="fs-base mb-3">پرینتر</h6>
                                 <ul class="widget-list">
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">همه</a>
                                     </li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">کپی</a>
                                     </li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">فکس</a>
                                     </li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">چاپ</a>
                                     </li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">فکس</a>
                                     </li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">چاپ</a>
                                     </li>
                                 </ul>
                             </div>
                             <div class="widget widget-links">
                                 <h6 class="fs-base mb-3">اسکنر</h6>
                                 <ul class="widget-list">
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">تجاری</a>
                                     </li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">اسناد</a>
                                     </li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">تجاری</a>
                                     </li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">اسناد</a>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                         <div class="mega-dropdown-column py-4 px-3">
                             <div class="widget widget-links">
                                 <h6 class="fs-base">پرینتر</h6>
                                 <ul class="widget-list">
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">پرینتر
                                             لیزری</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">نوری</a>
                                     </li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">پرینتر
                                             عکس</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">پرینتر
                                             لیزری</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">نوری</a>
                                     </li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">پرینتر
                                             عکس</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">نوری</a>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                         <div class="mega-dropdown-column d-none d-lg-block py-4 text-center">
                             <a class="d-block mb-2" href="#"><img src="img/shop/departments/13.jpg"
                                     alt="Printers &amp; Ink"></a>
                             <div class="fs-sm mb-3">شروع میشود از <span class='fw-medium'>54.<small>00</small></span>
                             </div><a class="btn btn-primary btn-shadow btn-sm" href="#">دیدن
                                 تخفیفات<i class="ci-arrow-right fs-xs ms-1"></i></a>
                         </div>
                     </div>
                 </div>
             </li>
             <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                     data-bs-toggle="dropdown"><i class="ci-joystick opacity-60 fs-lg mt-n1 me-2"></i>بازی های
                     ویدیویی</a>
                 <div class="dropdown-menu p-0">
                     <div class="d-flex flex-wrap flex-md-nowrap px-2">
                         <div class="mega-dropdown-column pt-4 pb-0 py-sm-4 px-3">
                             <div class="widget widget-links">
                                 <h6 class="fs-base mb-3">بازی های ویدیویی</h6>
                                 <ul class="widget-list">
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">بازی
                                             های ویدیویی</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">دستگاه</a>
                                     </li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">سی
                                             دی</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">سه
                                             بعدی</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">بازی
                                             های ویدیویی</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">دستگاه</a>
                                     </li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">سی
                                             دی</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">سه
                                             بعدی</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">بازی
                                             های ویدیویی</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">دستگاه</a>
                                     </li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">سی
                                             دی</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">سه
                                             بعدی</a></li>
                                 </ul>
                             </div>
                         </div>
                         <div class="mega-dropdown-column pt-0 pb-4 py-sm-4 px-3">
                             <div class="widget widget-links">
                                 <ul class="widget-list">
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">بازی
                                             های ویدیویی</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">دستگاه</a>
                                     </li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">سی
                                             دی</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">سه
                                             بعدی</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">تجهیزات
                                             جانبی</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">دستگاه</a>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                         <div class="mega-dropdown-column d-none d-lg-block py-4 text-center">
                             <a class="d-block mb-2" href="#"><img src="img/shop/departments/14.jpg"
                                     alt="بازی های ویدیویی"></a>
                             <div class="fs-sm mb-3">شروع میشود از <span class='fw-medium'>19.<small>00</small></span>
                             </div><a class="btn btn-primary btn-shadow btn-sm" href="#">دیدن
                                 تخفیفات<i class="ci-arrow-right fs-xs ms-1"></i></a>
                         </div>
                     </div>
                 </div>
             </li>
             <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                     data-bs-toggle="dropdown"><i class="ci-speaker opacity-60 fs-lg mt-n1 me-2"></i>اسپیکر</a>
                 <div class="dropdown-menu p-0">
                     <div class="d-flex flex-wrap flex-md-nowrap px-2">
                         <div class="mega-dropdown-column pt-4 pb-0 py-sm-4 px-3">
                             <div class="widget widget-links">
                                 <h6 class="fs-base mb-3">اسپیکر</h6>
                                 <ul class="widget-list">
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">بلوتوثی</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">شخصی</a>
                                     </li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">بی
                                             سیم</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">با
                                             سیم</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">بلوتوثی</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">شخصی</a>
                                     </li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">بی
                                             سیم</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">با
                                             سیم</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">بلوتوثی</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">شخصی</a>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                         <div class="mega-dropdown-column py-4 px-3">
                             <div class="widget widget-links">
                                 <h6 class="fs-base mb-3">صدا خانگی</h6>
                                 <ul class="widget-list">
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">رادیو</a>
                                     </li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">بی
                                             سیم</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">چند
                                             بعدی</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">بی
                                             سیم</a></li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">چند
                                             بعدی</a></li>
                                 </ul>
                             </div>
                         </div>
                         <div class="mega-dropdown-column d-none d-lg-block py-4 text-center">
                             <a class="d-block mb-2" href="#"><img src="img/shop/departments/16.jpg"
                                     alt="اسپیکر"></a>
                             <div class="fs-sm mb-3">شروع میشود از <span class='fw-medium'>43.<small>00</small></span>
                             </div><a class="btn btn-primary btn-shadow btn-sm" href="#">دیدن
                                 تخفیفات<i class="ci-arrow-right fs-xs ms-1"></i></a>
                         </div>
                     </div>
                 </div>
             </li>
             <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                     data-bs-toggle="dropdown"><i class="ci-server opacity-60 fs-lg mt-n1 me-2"></i>هارد</a>
                 <div class="dropdown-menu p-0">
                     <div class="d-flex flex-wrap flex-md-nowrap px-2">
                         <div class="mega-dropdown-column py-4 px-3">
                             <div class="widget widget-links">
                                 <h6 class="fs-base mb-3">هارد</h6>
                                 <ul class="widget-list">
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">خارجی</a>
                                     </li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">داخلی</a>
                                     </li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">فلش</a>
                                     </li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">فلاپی</a>
                                     </li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">خارجی</a>
                                     </li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">داخلی</a>
                                     </li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">فلش</a>
                                     </li>
                                     <li class="widget-list-item pb-1"><a class="widget-list-link"
                                             href="#">فلاپی</a>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                         <div class="mega-dropdown-column d-none d-lg-block py-4 text-center">
                             <a class="d-block mb-2" href="#"><img src="img/shop/departments/15.jpg"
                                     alt="HDD/SSD Data Storage"></a>
                             <div class="fs-sm mb-3">شروع میشود از <span class='fw-medium'>21.<small>60</small></span>
                             </div><a class="btn btn-primary btn-shadow btn-sm" href="#">دیدن
                                 تخفیفات<i class="ci-arrow-right fs-xs ms-1"></i></a>
                         </div>
                     </div>
                 </div>
             </li> --}}
            </ul>
        </li>
    </ul>

@endif
