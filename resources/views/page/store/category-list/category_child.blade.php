@foreach ($item->children as $item)
    @if ($item->hasChildren())
        <div style="margin-left: -14px" class="accordion-item border-0">
            <h3 class="accordion-header">
                <a class="p-0 accordion-button collapsed" href="{{ route('store.product.list', $item) }}" role="button"
                    data-bs-toggle="collapse" aria-expanded="false" aria-controls="clothing">
                    {{ $item->name }}
                </a>
            </h3>
            <div class="accordion-collapse collapse" id="clothing" data-bs-parent="#shop-categories">
                <div class="accordion-body p-0">
                    <div class="widget widget-links widget-filter">

                        <ul style="background: #f5f5f5; border-radius: 5px 0 5px 0px"
                            class="list-unstyled fs-sm mb-0 pt-1 ps-3">
                            @foreach ($item->children as $item)
                                <li class="px-1 d-flex align-items-center justify-content-between">
                                    <a class="nav-link-style"href="{{ route('store.product.list', $item) }}">
                                        <i class="ci-arrow-right-circle me-2"></i>
                                        {{ $item->name }}
                                    </a>
                                    <span class="fs-ms text-muted">235</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @else
        <li style="margin-left: -14px" class="widget-list-item widget-filter-item my-1">
            <a class="widget-list-link d-flex justify-content-between align-items-center"
                href="{{ route('store.product.list', $item) }}">
                <span class="widget-filter-item-text d-flex justify-content-between align-items-center">
                    <i class="ci-arrow-right-circle px-1"></i>
                    {{ $item->name }}
                </span>
                <span class="fs-xs text-muted ms-3">2,548</span>
            </a>
        </li>
    @endif
@endforeach
