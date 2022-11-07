@if ($paginator->hasPages())
    <style>
        .disabled {
            opacity: 0.5;
        }
    </style>
    <nav class="d-flex justify-content-between pt-2" aria-label="Page navigation">
        <ul class="pagination">
            @if ($paginator->onFirstPage())
                <li class="page-item">
                    <a class="page-link disabled" href="#">
                        <i class="ci-arrow-left me-2"></i>قبلی
                    </a>
                </li>
            @else
                <li class="page-item">
                    <button wire:click="previousPage">a</button>
                    <a class="page-link" wire:click="previousPage" href="">
                        <i class="ci-arrow-left me-2"></i>قبلی
                    </a>
                </li>
            @endif
        </ul>

        <ul class="pagination">
            @foreach ($elements as $element)
                @if (is_string($element))
                    <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active d-none d-sm-block" aria-current="page">
                                <span class="page-link">
                                    {{ $page }}
                                    <span class="visually-hidden">(جاری)</span>
                                </span>
                            </li>
                        @else
                            <li class="page-item d-none d-sm-block">
                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach
        </ul>

        <ul class="pagination">
            @if ($paginator->hasMorePages())
                <li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}" aria-label="Next">
                        بعدی
                        <i class="ci-arrow-right ms-2"></i>
                    </a>
                </li>
            @else
                <li class="page-item disabled"><a class="page-link" href="#" aria-label="Next">
                        بعدی
                        <i class="ci-arrow-right ms-2"></i>
                    </a>
                </li>
            @endif
        </ul>
    </nav>
@endif

{{-- 
<nav>
    <ul class="pagination">
        Previous Page Link
        @if ($paginator->onFirstPage())
            <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                <span aria-hidden="true">&lsaquo;</span>
            </li>
        @else
            <li>
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
            </li>
        @endif

        Pagination Elements
        @foreach ($elements as $element)
            "Three Dots" Separator
            @if (is_string($element))
                <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
            @endif

            Array Of Links
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active" aria-current="page"><span>{{ $page }}</span></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        Next Page Link
        @if ($paginator->hasMorePages())
            <li>
                <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
            </li>
        @else
            <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                <span aria-hidden="true">&rsaquo;</span>
            </li>
        @endif
    </ul>
</nav> --}}
