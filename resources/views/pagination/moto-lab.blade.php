@if ($paginator->hasPages())
<nav
    role="navigation"
    aria-label="Pagination"
    class="flex flex-col items-center justify-between gap-4 rounded-2xl border border-moto-border bg-moto-surface p-4 sm:flex-row">

    {{-- Mobile --}}
    <div class="flex w-full items-center justify-between gap-3 sm:hidden">

        @if ($paginator->onFirstPage())
        <span
            class="inline-flex flex-1 cursor-not-allowed items-center justify-center rounded-xl border border-moto-border px-4 py-3 text-sm font-semibold text-moto-muted opacity-50">
            Précédent
        </span>
        @else
        <a
            href="{{ $paginator->previousPageUrl() }}"
            rel="prev"
            class="inline-flex flex-1 items-center justify-center rounded-xl border border-moto-border px-4 py-3 text-sm font-semibold text-white transition hover:border-primary-600 hover:bg-primary-600">
            Précédent
        </a>
        @endif


        <span class="text-xs font-medium text-moto-muted">
            {{ $paginator->currentPage() }}
            /
            {{ $paginator->lastPage() }}
        </span>


        @if ($paginator->hasMorePages())
        <a
            href="{{ $paginator->nextPageUrl() }}"
            rel="next"
            class="inline-flex flex-1 items-center justify-center rounded-xl bg-primary-600 px-4 py-3 text-sm font-bold text-white transition hover:bg-primary-700">
            Suivant
        </a>
        @else
        <span
            class="inline-flex flex-1 cursor-not-allowed items-center justify-center rounded-xl bg-primary-600/30 px-4 py-3 text-sm font-semibold text-white/40">
            Suivant
        </span>
        @endif

    </div>


    {{-- Desktop --}}
    <div class="hidden w-full items-center justify-between gap-4 sm:flex">

        {{-- Results info --}}
        <p class="text-sm text-moto-muted">
            Affichage

            <span class="font-semibold text-white">
                {{ $paginator->firstItem() }}
            </span>

            à

            <span class="font-semibold text-white">
                {{ $paginator->lastItem() }}
            </span>

            sur

            <span class="font-semibold text-white">
                {{ $paginator->total() }}
            </span>

            motos
        </p>


        <div class="flex items-center gap-2">

            {{-- Previous --}}
            @if ($paginator->onFirstPage())
            <span
                class="flex h-10 w-10 cursor-not-allowed items-center justify-center rounded-xl border border-moto-border text-moto-muted opacity-40">

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="2"
                    stroke="currentColor"
                    class="h-4 w-4">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M15.75 19.5 8.25 12l7.5-7.5" />
                </svg>

            </span>
            @else
            <a
                href="{{ $paginator->previousPageUrl() }}"
                rel="prev"
                class="flex h-10 w-10 items-center justify-center rounded-xl border border-moto-border text-white transition hover:border-primary-600 hover:bg-primary-600">

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="2"
                    stroke="currentColor"
                    class="h-4 w-4">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M15.75 19.5 8.25 12l7.5-7.5" />
                </svg>

            </a>
            @endif


            {{-- Page numbers --}}
            @foreach ($elements as $element)

            {{-- Separator --}}
            @if (is_string($element))
            <span
                class="flex h-10 min-w-10 items-center justify-center px-2 text-sm text-moto-muted">
                {{ $element }}
            </span>
            @endif


            {{-- Links --}}
            @if (is_array($element))
            @foreach ($element as $page => $url)

            @if ($page == $paginator->currentPage())
            <span
                aria-current="page"
                class="flex h-10 min-w-10 items-center justify-center rounded-xl bg-primary-600 px-3 text-sm font-bold text-white shadow-lg shadow-primary-600/20">
                {{ $page }}
            </span>
            @else
            <a
                href="{{ $url }}"
                class="flex h-10 min-w-10 items-center justify-center rounded-xl border border-moto-border px-3 text-sm font-semibold text-moto-muted transition hover:border-primary-600 hover:bg-primary-600/10 hover:text-white">
                {{ $page }}
            </a>
            @endif

            @endforeach
            @endif

            @endforeach


            {{-- Next --}}
            @if ($paginator->hasMorePages())
            <a
                href="{{ $paginator->nextPageUrl() }}"
                rel="next"
                class="flex h-10 w-10 items-center justify-center rounded-xl border border-moto-border text-white transition hover:border-primary-600 hover:bg-primary-600">

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="2"
                    stroke="currentColor"
                    class="h-4 w-4">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>

            </a>
            @else
            <span
                class="flex h-10 w-10 cursor-not-allowed items-center justify-center rounded-xl border border-moto-border text-moto-muted opacity-40">

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="2"
                    stroke="currentColor"
                    class="h-4 w-4">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>

            </span>
            @endif

        </div>

    </div>

</nav>
@endif