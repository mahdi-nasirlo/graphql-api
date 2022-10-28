<!-- Gallery + details-->
<div class="bg-light shadow-lg rounded-3 px-4 py-3 mb-5">
    <div class="px-lg-3">
        <div class="row">
            <!-- گالری محصولات-->
            <div class="col-lg-7 pe-lg-0 pt-lg-4">
                @php
                    $gallery = $product->gallery;
                @endphp
                <div class="product-gallery">
                    <div class="product-gallery-preview order-sm-2">
                        @foreach ($gallery as $img)
                            <div class=" product-gallery-preview-item @once active @endonce"
                                id="img-gallery-{{ $img->id }}"><img class="image-zoom rounded border"
                                    src="{{ $img->getUrl() }}" data-zoom="{{ $img->getUrl() }}" alt="تصویر محصول">
                                <div class="image-zoom-pane"></div>
                            </div>
                        @endforeach
                        {{-- <div class="product-gallery-preview-item active" id="first"><img class="image-zoom"
                                src="{{ $product->gallery[0]->getUrl() }}"
                                data-zoom="{{ $product->gallery[0]->getUrl() }}" alt="تصویر محصول">
                            <div class="image-zoom-pane"></div>
                        </div>
                        <div class="product-gallery-preview-item" id="second"><img class="image-zoom"
                                src="{{ $product->gallery[1]->getUrl() }}"
                                data-zoom="{{ $product->gallery[1]->getUrl() }}" alt="تصویر محصول">
                            <div class="image-zoom-pane"></div>
                        </div>
                        <div class="product-gallery-preview-item" id="third"><img class="image-zoom"
                                src="img/shop/single/gallery/03.jpg" data-zoom="img/shop/single/gallery/03.jpg"
                                alt="تصویر محصول">
                            <div class="image-zoom-pane"></div>
                        </div>
                        <div class="product-gallery-preview-item" id="fourth"><img class="image-zoom"
                                src="img/shop/single/gallery/04.jpg" data-zoom="img/shop/single/gallery/04.jpg"
                                alt="تصویر محصول">
                            <div class="image-zoom-pane"></div>
                        </div> --}}
                    </div>
                    <div class="product-gallery-thumblist order-sm-1">
                        @foreach ($gallery as $img)
                            <a class="border border-1 product-gallery-thumblist-item @once active @endonce"
                                href="#img-gallery-{{ $img->id }}">
                                <img src="{{ $img->getUrl() }}" alt="تصویر محصول">
                            </a>
                        @endforeach
                        {{-- <a class="product-gallery-thumblist-item active" href="#first">
                            <img src="{{ $product->gallery[0]->getUrl() }}" alt="تصویر محصول">
                        </a>
                        <a class="product-gallery-thumblist-item" href="#second">
                            <img src="{{ $product->gallery[1]->getUrl() }}" alt="تصویر محصول">
                        </a>
                        <a class="product-gallery-thumblist-item" href="#third">
                            <img src="img/shop/single/gallery/th03.jpg" alt="تصویر محصول">
                        </a>
                        <a class="product-gallery-thumblist-item" href="#fourth">
                            <img src="img/shop/single/gallery/th04.jpg" alt="تصویر محصول">
                        </a>
                        <a class="product-gallery-thumblist-item video-item"
                            href="https://www.youtube.com/watch?v=1vrXpMLLK14">
                            <div class="product-gallery-thumblist-item-text">
                                <i class="ci-video"></i>ویدیو
                            </div>
                        </a> --}}
                    </div>
                </div>
            </div>
            <!-- Product details-->
            <div class="col-lg-5 pt-4 pt-lg-0">
                <div class="product-details ms-auto pb-3">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <a href="#reviews" data-scroll>
                            <div class="star-rating">
                                @for ($i = 0; $i < 5; $i++)
                                    @if ($i < $product->rating)
                                        <i class="star-rating-icon ci-star-filled active"></i>
                                    @else
                                        <i class="star-rating-icon ci-star"></i>
                                    @endif
                                @endfor
                                {{-- <i class="star-rating-icon ci-star-filled active"></i>
                                <i class="star-rating-icon ci-star-filled active"></i>
                                <i class="star-rating-icon ci-star-filled active"></i> --}}
                            </div><span class="d-inline-block fs-sm text-body align-middle mt-1 ms-1">74 نظر</span>
                        </a>
                        <button class="btn-wishlist me-0 me-lg-n3" type="button" data-bs-toggle="tooltip"
                            title="اضافه کردن به علاقه مندی"><i class="ci-heart"></i></button>
                    </div>
                    <div class="mb-3"><span class="h3 fw-normal text-accent me-1">18.<small>99</small></span>
                        <del class="text-muted fs-lg me-3">25.<small>00</small></del><span
                            class="badge bg-danger badge-shadow align-middle mt-n2">تخفیف</span>
                    </div>
                    <div class="fs-sm mb-4"><span class="text-heading fw-medium me-1">رنگ:</span><span
                            class="text-muted" id="colorOption">قرمز/تاریک</span></div>
                    <div class="position-relative me-n4 mb-3">
                        <div class="form-check form-option form-check-inline mb-2">
                            <input class="form-check-input" type="radio" name="color" id="color1"
                                data-bs-label="colorOption" value="قرمز/تاریک" checked>
                            <label class="form-option-label rounded-circle" for="color1"><span
                                    class="form-option-color rounded-circle"
                                    style="background-image: url(img/shop/single/color-opt-1.png)"></span></label>
                        </div>
                        <div class="form-check form-option form-check-inline mb-2">
                            <input class="form-check-input" type="radio" name="color" id="color2"
                                data-bs-label="colorOption" value="Beige/White/Dark grey">
                            <label class="form-option-label rounded-circle" for="color2"><span
                                    class="form-option-color rounded-circle"
                                    style="background-image: url(img/shop/single/color-opt-2.png)"></span></label>
                        </div>
                        <div class="form-check form-option form-check-inline mb-2">
                            <input class="form-check-input" type="radio" name="color" id="color3"
                                data-bs-label="colorOption" value="Dark grey/White/Orange">
                            <label class="form-option-label rounded-circle" for="color3"><span
                                    class="form-option-color rounded-circle"
                                    style="background-image: url(img/shop/single/color-opt-3.png)"></span></label>
                        </div>
                        <div class="product-badge product-available mt-n1"><i class="ci-security-check"></i>ویژگی
                            محصول</div>
                    </div>
                    <form class="mb-grid-gutter" method="post">
                        <div class="mb-3">
                            <div class="d-flex justify-content-between align-items-center pb-1">
                                <label class="form-label" for="product-size">سایز : </label><a
                                    class="nav-link-style fs-sm" href="#size-chart" data-bs-toggle="modal"><i
                                        class="ci-ruler lead align-middle me-1 mt-n1"></i>سایز</a>
                            </div>
                            <select class="form-select" required id="product-size">
                                <option value="">انتخاب سایز</option>
                                <option value="xs">XS</option>
                                <option value="s">S</option>
                                <option value="m">M</option>
                                <option value="l">L</option>
                                <option value="xl">XL</option>
                            </select>
                        </div>
                        <div class="mb-3 d-flex align-items-center">
                            <select class="form-select me-3" style="width: 5rem;">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                            <button class="btn btn-primary btn-shadow d-block w-100" type="submit"><i
                                    class="ci-cart fs-lg me-2"></i>اضافه کردن به سبدخرید</button>
                        </div>
                    </form>
                    <!-- Product panels-->
                    <div class="accordion mb-4" id="productPanels">
                        <div class="accordion-item">
                            <h3 class="accordion-header"><a class="accordion-button" href="#productInfo"
                                    role="button" data-bs-toggle="collapse" aria-expanded="true"
                                    aria-controls="productInfo"><i
                                        class="ci-announcement text-muted fs-lg align-middle mt-n1 me-2"></i>اطلاعات
                                    محصول</a></h3>
                            <div class="accordion-collapse collapse show" id="productInfo"
                                data-bs-parent="#productPanels">
                                <div class="accordion-body">
                                    <h6 class="fs-sm mb-2">ترکیب بندی</h6>
                                    <ul class="fs-sm ps-4">
                                        <li>دنده الاستیک: پنبه 95 </li>
                                        <li>پوشش: پنبه 100</li>
                                        <li>پنبه 80٪ ، پلی استر 20٪</li>
                                    </ul>
                                    <h6 class="fs-sm mb-2">هنری</h6>
                                    <ul class="fs-sm ps-4 mb-0">
                                        <li>183260098</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header"><a class="accordion-button collapsed"
                                    href="#shippingOptions" role="button" data-bs-toggle="collapse"
                                    aria-expanded="true" aria-controls="shippingOptions"><i
                                        class="ci-delivery text-muted lead align-middle mt-n1 me-2"></i>گزینه های
                                    ارسال</a></h3>
                            <div class="accordion-collapse collapse" id="shippingOptions"
                                data-bs-parent="#productPanels">
                                <div class="accordion-body fs-sm">
                                    <div class="d-flex justify-content-between border-bottom pb-2">
                                        <div>
                                            <div class="fw-semibold text-dark">پیک</div>
                                            <div class="fs-sm text-muted">4-6 روز</div>
                                        </div>
                                        <div>26050</div>
                                    </div>
                                    <div class="d-flex justify-content-between border-bottom py-2">
                                        <div>
                                            <div class="fw-semibold text-dark">پیک</div>
                                            <div class="fs-sm text-muted">4-6 روز</div>
                                        </div>
                                        <div>11000</div>
                                    </div>
                                    <div class="d-flex justify-content-between border-bottom py-2">
                                        <div>
                                            <div class="fw-semibold text-dark">پیک</div>
                                            <div class="fs-sm text-muted">4-6 روز</div>
                                        </div>
                                        <div>338500</div>
                                    </div>
                                    <div class="d-flex justify-content-between border-bottom py-2">
                                        <div>
                                            <div class="fw-semibold text-dark">پست حمل</div>
                                            <div class="fs-sm text-muted">4-6 روز</div>
                                        </div>
                                        <div>180000</div>
                                    </div>
                                    <div class="d-flex justify-content-between pt-2">
                                        <div>
                                            <div class="fw-semibold text-dark">پیک</div>
                                            <div class="fs-sm text-muted">&mdash;</div>
                                        </div>
                                        <div>000</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header"><a class="accordion-button collapsed" href="#localStore"
                                    role="button" data-bs-toggle="collapse" aria-expanded="true"
                                    aria-controls="localStore"><i
                                        class="ci-location text-muted fs-lg align-middle mt-n1 me-2"></i>در فروشگاه
                                    محلی پیدا کنید</a></h3>
                            <div class="accordion-collapse collapse" id="localStore" data-bs-parent="#productPanels">
                                <div class="accordion-body">
                                    <select class="form-select">
                                        <option value>انتخاب کشور</option>
                                        <option value="Argentina">آرژانتین</option>
                                        <option value="Belgium">بلژیک</option>
                                        <option value="France">فرانسه</option>
                                        <option value="Germany">آلمان</option>
                                        <option value="Spain">اسپانیا</option>
                                        <option value="UK">ایالات متحده</option>
                                        <option value="USA">آمریکا</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Sharing-->
                    <label class="form-label d-inline-block align-middle my-2 me-3">اشتراک:</label><a
                        class="btn-share btn-twitter me-2 my-2" href="#"><i class="ci-twitter"></i>توییتر</a><a
                        class="btn-share btn-instagram me-2 my-2" href="#"><i
                            class="ci-instagram"></i>اینستاگرام</a><a class="btn-share btn-facebook my-2"
                        href="#"><i class="ci-facebook"></i>فیسبوک</a>
                </div>
            </div>
        </div>
    </div>
</div>
