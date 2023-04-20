@if ($paginator->hasPages())
    <nav class="flex justify-between">
        <div class="flex">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <span class="border border-gray-300 rounded-l px-2 py-1 cursor-not-allowed opacity-50" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span aria-hidden="true">@lang('pagination.previous')</span>
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="border border-gray-300 rounded-l px-2 py-1 hover:bg-gray-100">
                    <span aria-hidden="true">@lang('pagination.previous')</span>
                </a>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <span class="border border-gray-300 px-2 py-1 cursor-not-allowed opacity-50">{{ $element }}</span>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span class="border border-gray-300 px-2 py-1 bg-blue-500 text-white">{{ $page }}</span>
                        @else
                            <a href="{{ $url }}" class="border border-gray-300 px-2 py-1 hover:bg-blue-500 hover:text-white">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="border border-gray-300 rounded-r px-2 py-1 hover:bg-gray-100">
                    <span aria-hidden="true">@lang('pagination.next')</span>
                </a>
            @else
                <span class="border border-gray-300 rounded-r px-2 py-1 cursor-not-allowed opacity-50" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span aria-hidden="true">@lang('pagination.next')</span>
                </span>
            @endif
        </div>
    </nav>
@endif
