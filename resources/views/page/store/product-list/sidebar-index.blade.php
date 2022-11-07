<!-- Sidebar-->
<aside class="col-lg-4">
    <!-- Sidebar-->
    <div class="offcanvas offcanvas-collapse bg-white w-100 rounded-3 shadow-lg py-1" id="shop-sidebar"
        style="max-width: 22rem;">
        <div class="offcanvas-header align-items-center shadow-sm">
            <h2 class="h5 mb-0">فیلتر</h2>
            <button class="btn-close ms-auto" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body py-grid-gutter px-lg-grid-gutter">
                                @include('page.store.product-list.sidebar-category')

            <!-- قیمت -->
            <div class="widget mb-4 pb-4 border-bottom">
                <h3 class="widget-title">قیمت</h3>
                <div class="range-slider" data-start-min="250" data-start-max="680" data-min="0" data-max="1000"
                    data-step="1">
                    <div class="range-slider-ui"></div>
                    <div class="d-flex pb-1">
                        <div class="w-50 pe-2 me-2">
                            <div class="input-group input-group-sm"><span class="input-group-text">تومان</span>
                                <input class="form-control range-slider-value-min" type="text">
                            </div>
                        </div>
                        <div class="w-50 ps-2">
                            <div class="input-group input-group-sm"><span class="input-group-text">تومان</span>
                                <input class="form-control range-slider-value-max" type="text">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Filter by Brand-->
            <div class="widget widget-filter mb-4 pb-4 border-bottom">
                <h3 class="widget-title">برند</h3>
                <div class="input-group input-group-sm mb-2">
                    <input class="widget-filter-search form-control rounded-end pe-5" type="text"
                        placeholder="جستجو"><i
                        class="ci-search position-absolute top-50 end-0 translate-middle-y fs-sm me-3"></i>
                </div>

                <ul class="widget-list widget-filter-list list-unstyled pt-1" style="max-height: 11rem;" data-simplebar
                    data-simplebar-auto-hide="false">
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="adidas">
                            <label class="form-check-label widget-filter-item-text" for="adidas">آدیداس</label>
                        </div><span class="fs-xs text-muted">425</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="ataylor">
                            <label class="form-check-label widget-filter-item-text" for="ataylor">آدیداس</label>
                        </div><span class="fs-xs text-muted">15</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="armani">
                            <label class="form-check-label widget-filter-item-text" for="armani">آدیداس</label>
                        </div><span class="fs-xs text-muted">18</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="banana">
                            <label class="form-check-label widget-filter-item-text" for="banana">آدیداس</label>
                        </div><span class="fs-xs text-muted">103</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="bilabong">
                            <label class="form-check-label widget-filter-item-text" for="bilabong">آدیداس</label>
                        </div><span class="fs-xs text-muted">27</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="birkenstock">
                            <label class="form-check-label widget-filter-item-text" for="birkenstock">نایک</label>
                        </div><span class="fs-xs text-muted">10</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="klein">
                            <label class="form-check-label widget-filter-item-text" for="klein">نایک</label>
                        </div><span class="fs-xs text-muted">365</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="columbia">
                            <label class="form-check-label widget-filter-item-text" for="columbia">نایک</label>
                        </div><span class="fs-xs text-muted">508</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="converse">
                            <label class="form-check-label widget-filter-item-text" for="converse">نایک</label>
                        </div><span class="fs-xs text-muted">176</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="dockers">
                            <label class="form-check-label widget-filter-item-text" for="dockers">نایک</label>
                        </div><span class="fs-xs text-muted">54</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="fruit">
                            <label class="form-check-label widget-filter-item-text" for="fruit">نایک</label>
                        </div><span class="fs-xs text-muted">739</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="hanes">
                            <label class="form-check-label widget-filter-item-text" for="hanes">نایک</label>
                        </div><span class="fs-xs text-muted">92</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="choo">
                            <label class="form-check-label widget-filter-item-text" for="choo">نایک</label>
                        </div><span class="fs-xs text-muted">17</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="levis">
                            <label class="form-check-label widget-filter-item-text" for="levis">پوما</label>
                        </div><span class="fs-xs text-muted">361</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="lee">
                            <label class="form-check-label widget-filter-item-text" for="lee">پوما</label>
                        </div><span class="fs-xs text-muted">264</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="wearhouse">
                            <label class="form-check-label widget-filter-item-text" for="wearhouse">پوما</label>
                        </div><span class="fs-xs text-muted">75</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="newbalance">
                            <label class="form-check-label widget-filter-item-text" for="newbalance">پوما</label>
                        </div><span class="fs-xs text-muted">218</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="nike">
                            <label class="form-check-label widget-filter-item-text" for="nike">پوما</label>
                        </div><span class="fs-xs text-muted">810</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="navy">
                            <label class="form-check-label widget-filter-item-text" for="navy">پوما</label>
                        </div><span class="fs-xs text-muted">147</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="polo">
                            <label class="form-check-label widget-filter-item-text" for="polo">پوما</label>
                        </div><span class="fs-xs text-muted">64</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="puma">
                            <label class="form-check-label widget-filter-item-text" for="puma">تامی</label>
                        </div><span class="fs-xs text-muted">370</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="reebok">
                            <label class="form-check-label widget-filter-item-text" for="reebok">تامی</label>
                        </div><span class="fs-xs text-muted">506</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="skechers">
                            <label class="form-check-label widget-filter-item-text" for="skechers">تامی</label>
                        </div><span class="fs-xs text-muted">209</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="hilfiger">
                            <label class="form-check-label widget-filter-item-text" for="hilfiger">تامی</label>
                        </div><span class="fs-xs text-muted">487</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="armour">
                            <label class="form-check-label widget-filter-item-text" for="armour">پوما</label>
                        </div><span class="fs-xs text-muted">90</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="urban">
                            <label class="form-check-label widget-filter-item-text" for="urban">پوما</label>
                        </div><span class="fs-xs text-muted">152</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="vsecret">
                            <label class="form-check-label widget-filter-item-text" for="vsecret">پوما</label>
                        </div><span class="fs-xs text-muted">238</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="wolverine">
                            <label class="form-check-label widget-filter-item-text" for="wolverine">نایک</label>
                        </div><span class="fs-xs text-muted">29</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="wrangler">
                            <label class="form-check-label widget-filter-item-text" for="wrangler">نایک</label>
                        </div><span class="fs-xs text-muted">115</span>
                    </li>
                </ul>
            </div>
            <!-- Filter by Size-->
            <div class="widget widget-filter mb-4 pb-4 border-bottom">
                <h3 class="widget-title">سایز</h3>
                <div class="input-group input-group-sm mb-2">
                    <input class="widget-filter-search form-control rounded-end pe-5" type="text"
                        placeholder="جستجو"><i
                        class="ci-search position-absolute top-50 end-0 translate-middle-y fs-sm me-3"></i>
                </div>
                <ul class="widget-list widget-filter-list list-unstyled pt-1" style="max-height: 11rem;"
                    data-simplebar data-simplebar-auto-hide="false">
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="size-xs">
                            <label class="form-check-label widget-filter-item-text" for="size-xs">XS</label>
                        </div><span class="fs-xs text-muted">34</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="size-s">
                            <label class="form-check-label widget-filter-item-text" for="size-s">S</label>
                        </div><span class="fs-xs text-muted">57</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="size-m">
                            <label class="form-check-label widget-filter-item-text" for="size-m">M</label>
                        </div><span class="fs-xs text-muted">198</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="size-l">
                            <label class="form-check-label widget-filter-item-text" for="size-l">L</label>
                        </div><span class="fs-xs text-muted">72</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="size-xl">
                            <label class="form-check-label widget-filter-item-text" for="size-xl">XL</label>
                        </div><span class="fs-xs text-muted">46</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="size-39">
                            <label class="form-check-label widget-filter-item-text" for="size-39">39</label>
                        </div><span class="fs-xs text-muted">112</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="size-40">
                            <label class="form-check-label widget-filter-item-text" for="size-40">40</label>
                        </div><span class="fs-xs text-muted">85</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="size-41">
                            <label class="form-check-label widget-filter-item-text" for="size-40">41</label>
                        </div><span class="fs-xs text-muted">210</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="size-42">
                            <label class="form-check-label widget-filter-item-text" for="size-42">42</label>
                        </div><span class="fs-xs text-muted">57</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="size-43">
                            <label class="form-check-label widget-filter-item-text" for="size-43">43</label>
                        </div><span class="fs-xs text-muted">30</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="size-44">
                            <label class="form-check-label widget-filter-item-text" for="size-44">44</label>
                        </div><span class="fs-xs text-muted">61</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="size-45">
                            <label class="form-check-label widget-filter-item-text" for="size-45">45</label>
                        </div><span class="fs-xs text-muted">23</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="size-46">
                            <label class="form-check-label widget-filter-item-text" for="size-46">46</label>
                        </div><span class="fs-xs text-muted">19</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="size-47">
                            <label class="form-check-label widget-filter-item-text" for="size-47">47</label>
                        </div><span class="fs-xs text-muted">15</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="size-48">
                            <label class="form-check-label widget-filter-item-text" for="size-48">48</label>
                        </div><span class="fs-xs text-muted">12</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="size-49">
                            <label class="form-check-label widget-filter-item-text" for="size-49">49</label>
                        </div><span class="fs-xs text-muted">8</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="size-50">
                            <label class="form-check-label widget-filter-item-text" for="size-50">50</label>
                        </div><span class="fs-xs text-muted">6</span>
                    </li>
                </ul>
            </div>
            <!-- Filter by Color-->
            <div class="widget">
                <h3 class="widget-title">رنگ</h3>

                <div class="d-flex flex-wrap">
                    <div class="form-check form-option text-center mb-2 mx-1" style="width: 4rem;">
                        <input class="form-check-input" type="checkbox" id="color-blue-gray">
                        <label class="form-option-label rounded-circle" for="color-blue-gray"><span
                                class="form-option-color rounded-circle"
                                style="background-color: #b3c8db;"></span></label>
                        <label class="d-block fs-xs text-muted mt-n1" for="color-blue-gray">آبی</label>
                    </div>
                    <div class="form-check form-option text-center mb-2 mx-1" style="width: 4rem;">
                        <input class="form-check-input" type="checkbox" id="color-burgundy">
                        <label class="form-option-label rounded-circle" for="color-burgundy"><span
                                class="form-option-color rounded-circle"
                                style="background-color: #ca7295;"></span></label>
                        <label class="d-block fs-xs text-muted mt-n1" for="color-burgundy">بنفش</label>
                    </div>
                    <div class="form-check form-option text-center mb-2 mx-1" style="width: 4rem;">
                        <input class="form-check-input" type="checkbox" id="color-teal">
                        <label class="form-option-label rounded-circle" for="color-teal"><span
                                class="form-option-color rounded-circle"
                                style="background-color: #91c2c3;"></span></label>
                        <label class="d-block fs-xs text-muted mt-n1" for="color-teal">آبی</label>
                    </div>
                    <div class="form-check form-option text-center mb-2 mx-1" style="width: 4rem;">
                        <input class="form-check-input" type="checkbox" id="color-brown">
                        <label class="form-option-label rounded-circle" for="color-brown"><span
                                class="form-option-color rounded-circle"
                                style="background-color: #9a8480;"></span></label>
                        <label class="d-block fs-xs text-muted mt-n1" for="color-brown">قهوه ای</label>
                    </div>
                    <div class="form-check form-option text-center mb-2 mx-1" style="width: 4rem;">
                        <input class="form-check-input" type="checkbox" id="color-coral-red">
                        <label class="form-option-label rounded-circle" for="color-coral-red"><span
                                class="form-option-color rounded-circle"
                                style="background-color: #ff7072;"></span></label>
                        <label class="d-block fs-xs text-muted mt-n1" for="color-coral-red">قرمز</label>
                    </div>
                    <div class="form-check form-option text-center mb-2 mx-1" style="width: 4rem;">
                        <input class="form-check-input" type="checkbox" id="color-navy">
                        <label class="form-option-label rounded-circle" for="color-navy"><span
                                class="form-option-color rounded-circle"
                                style="background-color: #696dc8;"></span></label>
                        <label class="d-block fs-xs text-muted mt-n1" for="color-navy">سورمه ای</label>
                    </div>
                    <div class="form-check form-option text-center mb-2 mx-1" style="width: 4rem;">
                        <input class="form-check-input" type="checkbox" id="color-charcoal">
                        <label class="form-option-label rounded-circle" for="color-charcoal"><span
                                class="form-option-color rounded-circle"
                                style="background-color: #4e4d4d;"></span></label>
                        <label class="d-block fs-xs text-muted mt-n1" for="color-charcoal">زغالی</label>
                    </div>
                    <div class="form-check form-option text-center mb-2 mx-1" style="width: 4rem;">
                        <input class="form-check-input" type="checkbox" id="color-sky-blue">
                        <label class="form-option-label rounded-circle" for="color-sky-blue"><span
                                class="form-option-color rounded-circle"
                                style="background-color: #8bcdf5;"></span></label>
                        <label class="d-block fs-xs text-muted mt-n1" for="color-sky-blue">آبی
                            آسمانی</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>