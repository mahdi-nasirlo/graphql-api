@php
    $attributes = $category->attributes;
@endphp
@foreach ($attributes as $attribute)
    <!-- Filter by Size-->
    <div class="widget widget-filter mb-4 pb-4 {{ $loop->last ?? 'border-bottom' }}">
        <h3 class="widget-title">{{ $attribute->name }}</h3>
        @if ($attributes->count() > 6)
            <div class="input-group input-group-sm mb-2">
                <input class="widget-filter-search form-control rounded-end pe-5" type="text" placeholder="جستجو"><i
                    class="ci-search position-absolute top-50 end-0 translate-middle-y fs-sm me-3"></i>
            </div>
        @endif
        <ul class="widget-list widget-filter-list list-unstyled pt-1" style="max-height: 11rem;" data-simplebar
            data-simplebar-auto-hide="false">
            @foreach ($attribute->values as $value)
                <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                    <div class="form-check">
                        <input value="{{ $value }}" wire:model='attributes' class="form-check-input"
                            type="checkbox" id="size-xs">
                        <label class="form-check-label widget-filter-item-text"
                            for="size-xs">{{ $value }}</label>
                    </div>
                    <span class="fs-xs text-muted">34</span>
                </li>
            @endforeach
        </ul>
    </div>
@endforeach


{{-- 
    TODO: make beter query for value of attribute and category attribute
    TODO: display number of product on filter 
    TODO: make livewire componet make searchanbe on filrer
    FIXME: fix filter if to attribute name is like 
--}}
