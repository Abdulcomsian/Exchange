<div id="pagination-div">
    @if ($paginator->onFirstPage())
        <a class="previous" rel="8" style="pointer-events: none; cursor: default;"><<</a>
    @else
        <a href="{{ $paginator->previousPageUrl() }}" class="previous" rel="8"><<</a>
    @endif

    @foreach ($elements as $element)
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <a rel="{{ $page }}" class="active">{{ $page }}</a>
                @else
                    <a href="{{ $url }}" rel="{{ $page }}">{{ $page }}</a>
                @endif
            @endforeach
        @endif
    @endforeach

    @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}" class="next" rel="8">&gt;&gt;</a>
    @else
        <a class="next" rel="8" style="pointer-events: none; cursor: default;">&gt;&gt;</a>
    @endif
</div>
