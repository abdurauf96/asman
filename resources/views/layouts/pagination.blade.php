<!-- <ul class="pagenation__ul">
  <li class="pagenation__li pagenation-active"><a class="pagenation__link" href="# ">1</a></li>
  <li class="pagenation__li"> <a class="pagenation__link" href="# ">2</a></li>
  <li class="pagenation__li"> <a class="pagenation__link" href="# ">3</a></li>
  <li class="pagenation__li"> <a class="pagenation__link" href="# "> >> </a></li>
</ul> -->

@if ($paginator->hasPages())
    <ul class="pagenation__ul">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <!-- <li class="disabled pagen-item "><span class="pagen-link"> << </span></li> -->
        @else
            <li class="pagenation__li"><a class="pagenation__link" href="{{ $paginator->previousPageUrl() }}" rel="prev"> << </a></li>
        @endif


        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="pagenation__li pagenation-active disabled"><span>{{ $element }}</span></li>
            @endif


            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="pagenation__li pagenation-active "><a class="pagenation__link ">{{ $page }}</a></li>
                    @else
                        <li class="pagenation__li"><a class="pagenation__link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach


        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="pagenation__li"><a class="pagenation__link" href="{{ $paginator->nextPageUrl() }}" rel="next"> >> </a></li>
        @else
            <li class="disabled pagenation__li"><span class="pagenation__link"> >> </span></li>
        @endif
    </ul>
@endif