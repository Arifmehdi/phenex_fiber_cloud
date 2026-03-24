@if ($paginator->hasPages())
    <ul class="pagination theme-colored">

        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled">
                <span aria-hidden="true">«</span>
            </li>
        @else
            <li>
                <a href="{{ $paginator->previousPageUrl() }}" aria-label="Previous">
                    <span aria-hidden="true">«</span>
                </a>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)

            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif

            {{-- Page Number Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active"><a href="#">{{ $page }}</a></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif

        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li>
                <a href="{{ $paginator->nextPageUrl() }}" aria-label="Next">
                    <span aria-hidden="true">»</span>
                </a>
            </li>
        @else
            <li class="disabled">
                <span aria-hidden="true">»</span>
            </li>
        @endif

    </ul>
@endif
