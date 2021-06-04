@if ($paginator->hasPages())
    <nav aria-label="navigation">
        <ul class="pagination justify-content-end mt-50">
            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#">{{ sprintf('%02d', $page) }}.</a></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ sprintf('%02d', $page) }}.</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach
        </ul>
    </nav>
@endif

