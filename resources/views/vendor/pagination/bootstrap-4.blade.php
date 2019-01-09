@if ($paginator->hasPages())
    <div class="text-center cor-azul-show u-fs-18 u-mb-50">
      @if( !$paginator->onFirstPage())
        <a href="{{ $paginator->previousPageUrl() }}" class="transition hover-link-azul u-bc-gs-150 img-circle d-inline-block u-px-10 u-py-1"><i class="u-fs-18 text-white fas fa-angle-left"></i></a>
      @endif
      @foreach ($elements as $element)
        @if (is_string($element))
          <a href="#" class="mx-3 cor-azul-show disabled">{{ $element }}</a>
        @endif
        @if (is_array($element))
          @foreach ($element as $page => $url)
            @if ($page == $paginator->currentPage())
              <a href="#" class="mx-3 cor-azul-show active">{{ $page }}</a>
            @else
              <a href="{{ $url }}" class="mx-3 cor-azul-show active">{{ $page }}</a>
            @endif
          @endforeach
        @endif
      @endforeach
      @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}" class="transition hover-link-azul u-bc-gs-150 img-circle d-inline-block u-px-10 u-py-1"><i class="u-fs-18 text-white fas fa-angle-right"></i></a>
      @endif
    </div>
@endif
