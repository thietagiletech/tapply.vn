@if ($paginator->hasPages())
<ul class="tapply-pagination">
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
        <li class="tapply-page-item disable">
            <a class="page-link">
                <img src="{{ asset('themes/' . $theme->folder . '/img/home/chevron-right.svg') }}" alt="">
            </a>
        </li>
    @else
        <li class="tapply-page-item previous">
            <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">
                <img src="{{ asset('themes/' . $theme->folder . '/img/home/chevron-right.svg') }}" alt="">
            </a>
        </li>
    @endif

    @if($paginator->currentPage() > 3)
        <li class="tapply-page-item">
            <a class="page-link" href="{{ $paginator->url(1) }}">1</a>
        </li>
    @endif
    @if($paginator->currentPage() > 4)
        <li class="tapply-page-item">
            <a class="page-link">...</a>
        </li>
    @endif
    @foreach(range(1, $paginator->lastPage()) as $i)
        @if($i >= $paginator->currentPage() - 2 && $i <= $paginator->currentPage() + 2)
            @if ($i == $paginator->currentPage())
                <li class="tapply-page-item" style="background:#cccccc;">
                    <a class="page-link">{{ $i }}</a>
                </li>
            @else
                <li class="tapply-page-item">
                    <a class="page-link" href="{{ $paginator->url($i) }}">{{ $i }}</a>
                </li>
            @endif
        @endif
    @endforeach
    @if($paginator->currentPage() < $paginator->lastPage() - 3)
        <li class="tapply-page-item">
            <a class="page-link">...</a>
        </li>
    @endif
    @if($paginator->currentPage() < $paginator->lastPage() - 2)
        <li class="tapply-page-item">
            <a class="page-link" href="{{ $paginator->url($paginator->lastPage()) }}">{{ $paginator->lastPage() }}</a>
        </li>
    @endif

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
        <li class="tapply-page-item">
            <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">
                <img src="{{ asset('themes/' . $theme->folder . '/img/home/chevron-right.svg') }}" alt="">
            </a>
        </li>
    @else
        <li class="tapply-page-item next disable">
            <a class="page-link">
                <img src="{{ asset('themes/' . $theme->folder . '/img/home/chevron-right.svg') }}" alt="">
            </a>
        </li>
    @endif
</ul>
@endif