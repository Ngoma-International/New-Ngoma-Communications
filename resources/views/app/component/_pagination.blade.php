@if ($paginator->hasPages())
    <div class="pager">
        @if ($paginator->onFirstPage())
            <li class="disabled"><span>← Previous</span></li>
        @else
            <a class="next page-numbers" href="{{ $paginator->previousPageUrl() }}">Previous</a>
        @endif

            @foreach ($elements as $element)
                @if (is_string($element))
                    <span aria-current="page" class="page-numbers current">{{ $element }}</span>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span aria-current="page" class="page-numbers current">{{ $page }}</span>
                        @else
                            <a class="page-numbers" href="{{ $url }}">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            @if ($paginator->hasMorePages())
                <a class="next page-numbers" href="{{ $paginator->nextPageUrl() }}">Next</a>
                <li><a href="" rel="next">Next →</a></li>
            @else
                <li class="disabled"><span>Next →</span></li>
            @endif
    </div>
@endif
