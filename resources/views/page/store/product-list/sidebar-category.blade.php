{{-- 
    to template for list category
       1- for big category list
       2- for short category list
--}}

{{--
// TODO: make deferent between short and long category
// TODO: add number of product to category
// TODO: display visible categgory 
// FIXME make first category is open
// TODO add brand filter 
--}}

@php
    $relatedCategory = App\Models\Category::whereParent_id($category->id)
        ->with('children')
        ->get();
@endphp

<!-- Categories-->
@if ($relatedCategory->count())
    <div class="widget widget-categories mb-4 pb-4 border-bottom">
        <h3 class="widget-title">دسته بندی</h3>
        <div class="accordion mt-n1" id="shop-categories">
            @foreach ($relatedCategory as $item)
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <a class="accordion-button collapsed" href="#category{{ $item->id }}" role="button"
                            data-bs-toggle="collapse" aria-expanded="false"
                            aria-controls="category{{ $item->id }}">{{ $item->name }}</a>
                    </h3>
                    <div class="accordion-collapse collapse" id="category{{ $item->id }}"
                        data-bs-parent="#shop-categories">
                        <div class="accordion-body">
                            <div class="widget widget-links">
                                <ul class="widget-list">
                                    <li class="widget-list-item"><a
                                            class="widget-list-link d-flex justify-content-between align-items-center"
                                            href="#"><span>دیدن همه</span><span
                                                class="fs-xs text-muted ms-3">920</span></a>
                                    </li>

                                    @foreach ($item->children as $category)
                                        <li class="widget-list-item">
                                            <a class="widget-list-link d-flex justify-content-between align-items-center"
                                                href="#">
                                                <span>{{ $category->name }}</span>
                                                <span class="fs-xs text-muted ms-3">364</span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endif

{{-- 
<div class="accordion-item">
    <h3 class="accordion-header"><a class="accordion-button collapsed" href="#shoes" role="button"
            data-bs-toggle="collapse" aria-expanded="false" aria-controls="shoes">کفش</a></h3>
    <div class="accordion-collapse collapse" id="shoes" data-bs-parent="#shop-categories">
        <div class="accordion-body">
            <div class="widget widget-links widget-filter">
                <div class="input-group input-group-sm mb-2">
                    <input class="widget-filter-search form-control rounded-end" type="text" placeholder="جستجو"><i
                        class="ci-search position-absolute top-50 end-0 translate-middle-y fs-sm me-3"></i>
                </div>
                <ul class="widget-list widget-filter-list pt-1" style="height: 12rem;" data-simplebar
                    data-simplebar-auto-hide="false">
                    <li class="widget-list-item widget-filter-item"><a
                            class="widget-list-link d-flex justify-content-between align-items-center"
                            href="#"><span class="widget-filter-item-text">دیدن
                                همه</span><span class="fs-xs text-muted ms-3">1,953</span></a></li>
                    <li class="widget-list-item widget-filter-item"><a
                            class="widget-list-link d-flex justify-content-between align-items-center"
                            href="#"><span class="widget-filter-item-text">پمپ و
                                کفش پاشنه بلند</span><span class="fs-xs text-muted ms-3">247</span></a></li>
                    <li class="widget-list-item widget-filter-item"><a
                            class="widget-list-link d-flex justify-content-between align-items-center"
                            href="#"><span class="widget-filter-item-text">پمپ و
                                کفش پاشنه بلند</span><span class="fs-xs text-muted ms-3">156</span></a></li>
                    <li class="widget-list-item widget-filter-item"><a
                            class="widget-list-link d-flex justify-content-between align-items-center"
                            href="#"><span class="widget-filter-item-text">صندل</span><span
                                class="fs-xs text-muted ms-3">310</span></a></li>
                    <li class="widget-list-item widget-filter-item"><a
                            class="widget-list-link d-flex justify-content-between align-items-center"
                            href="#"><span class="widget-filter-item-text">صندل</span><span
                                class="fs-xs text-muted ms-3">402</span></a></li>
                    <li class="widget-list-item widget-filter-item"><a
                            class="widget-list-link d-flex justify-content-between align-items-center"
                            href="#"><span class="widget-filter-item-text">صندل</span><span
                                class="fs-xs text-muted ms-3">393</span></a></li>
                    <li class="widget-list-item widget-filter-item"><a
                            class="widget-list-link d-flex justify-content-between align-items-center"
                            href="#"><span class="widget-filter-item-text">دمپایی</span><span
                                class="fs-xs text-muted ms-3">50</span></a></li>
                    <li class="widget-list-item widget-filter-item"><a
                            class="widget-list-link d-flex justify-content-between align-items-center"
                            href="#"><span class="widget-filter-item-text">دمپایی</span><span
                                class="fs-xs text-muted ms-3">93</span></a></li>
                    <li class="widget-list-item widget-filter-item"><a
                            class="widget-list-link d-flex justify-content-between align-items-center"
                            href="#"><span class="widget-filter-item-text">بوت
                                مردانه</span><span class="fs-xs text-muted ms-3">122</span></a></li>
                    <li class="widget-list-item widget-filter-item"><a
                            class="widget-list-link d-flex justify-content-between align-items-center"
                            href="#"><span class="widget-filter-item-text">بوت
                                مردانه</span><span class="fs-xs text-muted ms-3">116</span></a></li>
                    <li class="widget-list-item widget-filter-item"><a
                            class="widget-list-link d-flex justify-content-between align-items-center"
                            href="#"><span class="widget-filter-item-text">همه
                                کفش ها</span><span class="fs-xs text-muted ms-3">24</span></a></li>
                    <li class="widget-list-item widget-filter-item"><a
                            class="widget-list-link d-flex justify-content-between align-items-center"
                            href="#"><span class="widget-filter-item-text">همه
                                کفش ها</span><span class="fs-xs text-muted ms-3">31</span></a></li>
                    <li class="widget-list-item widget-filter-item"><a
                            class="widget-list-link d-flex justify-content-between align-items-center"
                            href="#"><span class="widget-filter-item-text">کفش
                                مجلسی</span><span class="fs-xs text-muted ms-3">9</span></a></li>
                    <li class="widget-list-item widget-filter-item"><a
                            class="widget-list-link d-flex justify-content-between align-items-center"
                            href="#"><span class="widget-filter-item-text">کفش
                                مجلسی</span><span class="fs-xs text-muted ms-3">18</span></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>




<div class="accordion-item">
    <h3 class="accordion-header"><a class="accordion-button collapsed" href="#accessories" role="button"
            data-bs-toggle="collapse" aria-expanded="false" aria-controls="accessories">کیف</a></h3>
    <div class="accordion-collapse collapse" id="accessories" data-bs-parent="#shop-categories">
        <div class="accordion-body">
            <div class="widget widget-links">
                <ul class="widget-list">
                    <li class="widget-list-item"><a
                            class="widget-list-link d-flex justify-content-between align-items-center"
                            href="#"><span>دیدن همه</span><span class="fs-xs text-muted ms-3">920</span></a>
                    </li>
                    <li class="widget-list-item"><a
                            class="widget-list-link d-flex justify-content-between align-items-center"
                            href="#"><span>کمربندها</span><span class="fs-xs text-muted ms-3">364</span></a>
                    </li>
                    <li class="widget-list-item"><a
                            class="widget-list-link d-flex justify-content-between align-items-center"
                            href="#"><span>کلاه</span><span class="fs-xs text-muted ms-3">405</span></a></li>
                    <li class="widget-list-item"><a
                            class="widget-list-link d-flex justify-content-between align-items-center"
                            href="#"><span>جواهر</span><span class="fs-xs text-muted ms-3">131</span></a></li>
                    <li class="widget-list-item"><a
                            class="widget-list-link d-flex justify-content-between align-items-center"
                            href="#"><span>آرایشی</span><span class="fs-xs text-muted ms-3">20</span></a></li>
                </ul>
            </div>
        </div>
    </div>
</div> --}}
