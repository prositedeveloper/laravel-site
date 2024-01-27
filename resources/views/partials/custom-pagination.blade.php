@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-between">
        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
            <div class="flex items-center">
                {{-- Выводите ссылки на страницы --}}
                <div class="flex">
                    {{-- Вывод цифр страниц --}}
                    @foreach ($elements as $element)
                        @if (is_string($element))
                            <span class="pagination-ellipsis">{{ $element }}</span>
                        @endif

                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <span class="px-3 py-1 text-white bg-blue-500 rounded pagination-item active">{{ $page }}</span>
                                @else
                                    <a href="{{ $url }}" class="px-3 py-1 text-gray-700 bg-gray-200 rounded pagination-item hover:bg-gray-300">{{ $page }}</a>
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </div>
                {{-- Вывод результата --}}
                <p class="ml-3 text-gray-500">
                    Показано {{ $paginator->firstItem() }} - {{ $paginator->lastItem() }} из {{ $paginator->total() }} результатов
                </p>
            </div>
        </div>
    </nav>
@endif