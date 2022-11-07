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
            @include('page.store.product-list.sidebar-price')
            @include('page.store.product-list.sidebar-brand')
            @include('page.store.product-list.sidebar-filter')

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
