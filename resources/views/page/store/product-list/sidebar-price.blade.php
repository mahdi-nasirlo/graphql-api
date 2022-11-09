<style>
    .noUi-pips-horizontal {
        display: none;
    }

    .noUi-target {
        margin: 25px 4px !important;
    }
</style>

<div class="widget mb-4 pb-4 border-bottom">
    <h3 class="widget-title">قیمت</h3>
    <div class="range-slider" data-start-min="{{ $products->min('price') / 1000 }}"
        data-start-max="{{ $products->max('price') / 1000 }}" data-min="{{ $products->min('price') / 1000 }}"
        data-max="{{ $products->max('price') / 1000 }}" data-step="5">
        <div class="pb-4">
            <div class="w-100 mb-2">
                از
                <div class="input-group input-group-sm"><span class="input-group-text">هزار تومان</span>
                    <input wire:model.lazy='maxPrice' class="form-control range-slider-value-min" type="text">
                </div>
            </div>
            تا
            <div class="w-100">
                <div class="input-group input-group-sm"><span class="input-group-text">هزار تومان</span>
                    <input wire:model.lazy='maxPrice' class="form-control range-slider-value-max" type="text">
                </div>
            </div>
        </div>
        <div class="px-2 range-slider-ui noUi-target noUi-rtl noUi-horizontal noUi-txt-dir-rtl">
            <div class="noUi-base d-none">
                <div class="noUi-connects">
                    <div class="noUi-connect" style="transform: translate(17.3%, 0px) scale(0.577, 1);"></div>
                </div>
                <div class="noUi-origin" style="transform: translate(-250%, 0px); z-index: 5;">
                    <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider"
                        aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="827.0" aria-valuenow="250.0"
                        aria-valuetext="تومان250">
                        <div class="noUi-touch-area"></div>
                        <div class="noUi-tooltip">تومان250</div>
                    </div>
                </div>
                <div class="noUi-origin" style="transform: translate(-827%, 0px); z-index: 4;">
                    <div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0" role="slider"
                        aria-orientation="horizontal" aria-valuemin="250.0" aria-valuemax="1000.0" aria-valuenow="827.0"
                        aria-valuetext="تومان827">
                        <div class="noUi-touch-area"></div>
                        <div class="noUi-tooltip">تومان827</div>
                    </div>
                </div>
            </div>
            <div class="noUi-pips noUi-pips-horizontal d-none">
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="right: 0%;"></div>
                <div class="noUi-value noUi-value-horizontal noUi-value-large" data-value="0" style="right: 7%;">0</div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 1%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 2%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 3%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 4%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 5%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 6%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 7%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 8%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 9%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 10%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 11%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 12%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 13%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 14%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 15%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 16%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 17%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 18%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 19%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 20%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 21%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 22%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 23%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 24%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="right: 25%;"></div>
                <div class="noUi-value noUi-value-horizontal noUi-value-large" data-value="250" style="right: 25%;">
                    250
                </div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 26%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 27%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 28%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 29%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 30%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 31%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 32%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 33%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 34%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 35%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 36%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 37%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 38%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 39%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 40%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 41%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 42%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 43%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 44%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 45%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 46%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 47%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 48%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 49%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="right: 50%;"></div>
                <div class="noUi-value noUi-value-horizontal noUi-value-large" data-value="500" style="right: 50%;">
                    500</div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 51%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 52%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 53%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 54%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 55%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 56%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 57%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 58%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 59%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 60%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 61%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 62%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 63%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 64%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 65%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 66%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 67%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 68%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 69%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 70%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 71%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 72%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 73%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 74%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="right: 75%;"></div>
                <div class="noUi-value noUi-value-horizontal noUi-value-large" data-value="750" style="right: 75%;">
                    750</div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 76%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 77%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 78%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 79%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 80%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 81%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 82%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 83%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 84%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 85%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 86%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 87%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 88%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 89%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 90%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 91%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 92%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 93%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 94%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 95%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 96%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 97%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 98%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal" style="right: 99%;"></div>
                <div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="right: 100%;"></div>
                <div class="noUi-value noUi-value-horizontal noUi-value-large" data-value="1000"
                    style="right: 100%;">1000</div>
            </div>
        </div>
    </div>
</div>
