<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Admin Moto Lab' }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Montserrat:wght@600;700;800&display=swap"
        rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-moto-black font-sans text-moto-text antialiased">
    <div class="min-h-screen">
        <header class="sticky top-0 z-40 border-b border-moto-border bg-moto-black/95 backdrop-blur">
            <div class="mx-auto flex h-20 max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3">
                    <img src="{{asset('images/logo.png')}}" alt="Moto Lab Logo" class="h-16" srcset="">
                </a>

                <nav class="hidden items-center gap-2 md:flex">
                    <a
                        href="{{ route('admin.dashboard') }}"
                        class="rounded-lg px-4 py-2 text-sm font-semibold transition {{ request()->routeIs('admin.dashboard') ? 'bg-primary-600 text-white' : 'text-moto-muted hover:bg-moto-surface-light hover:text-white' }}">
                        Dashboard
                    </a>

                    <a
                        href="{{ route('admin.motos.index') }}"
                        class="rounded-lg px-4 py-2 text-sm font-semibold transition {{ request()->routeIs('admin.motos.*') ? 'bg-primary-600 text-white' : 'text-moto-muted hover:bg-moto-surface-light hover:text-white' }}">
                        Motos
                    </a>

                    <a
                        href="{{ route('admin.brands.index') }}"
                        class="rounded-lg px-4 py-2 text-sm font-semibold transition {{ request()->routeIs('admin.brands.*') ? 'bg-primary-600 text-white' : 'text-moto-muted hover:bg-moto-surface-light hover:text-white' }}">
                        Marques
                    </a>

                    <a
                        href="{{ route('admin.categories.index') }}"
                        class="rounded-lg px-4 py-2 text-sm font-semibold transition {{ request()->routeIs('admin.categories.*') ? 'bg-primary-600 text-white' : 'text-moto-muted hover:bg-moto-surface-light hover:text-white' }}">
                        Catégories
                    </a>
                </nav>

                <div class="flex items-center gap-4">
                    <span class="hidden text-sm text-moto-muted sm:inline">
                        {{ Auth::guard('admin')->user()?->name }}
                    </span>

                    <form method="POST" action="{{ route('admin.logout') }}">
                        @csrf
                        <button
                            type="submit"
                            class="rounded-lg border border-moto-border px-4 py-2 text-sm font-semibold text-white transition hover:border-primary-600 hover:bg-primary-600">
                            Déconnexion
                        </button>
                    </form>
                </div>
            </div>

            <nav class="mx-auto flex max-w-7xl gap-2 overflow-x-auto border-t border-moto-border px-4 py-3 sm:px-6 md:hidden lg:px-8">
                <a
                    href="{{ route('admin.dashboard') }}"
                    class="rounded-lg px-4 py-2 text-sm font-semibold transition {{ request()->routeIs('admin.dashboard') ? 'bg-primary-600 text-white' : 'text-moto-muted hover:bg-moto-surface-light hover:text-white' }}">
                    Dashboard
                </a>

                <a
                    href="{{ route('admin.motos.index') }}"
                    class="rounded-lg px-4 py-2 text-sm font-semibold transition {{ request()->routeIs('admin.motos.*') ? 'bg-primary-600 text-white' : 'text-moto-muted hover:bg-moto-surface-light hover:text-white' }}">
                    Motos
                </a>

                <a
                    href="{{ route('admin.brands.index') }}"
                    class="rounded-lg px-4 py-2 text-sm font-semibold transition {{ request()->routeIs('admin.brands.*') ? 'bg-primary-600 text-white' : 'text-moto-muted hover:bg-moto-surface-light hover:text-white' }}">
                    Marques
                </a>

                <a
                    href="{{ route('admin.categories.index') }}"
                    class="rounded-lg px-4 py-2 text-sm font-semibold transition {{ request()->routeIs('admin.categories.*') ? 'bg-primary-600 text-white' : 'text-moto-muted hover:bg-moto-surface-light hover:text-white' }}">
                    Catégories
                </a>
            </nav>
        </header>

        @hasSection('header')
        <section class="border-b border-moto-border bg-moto-surface">
            <div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
                @yield('header')
            </div>
        </section>
        @endif

        <main class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
            @yield('content')
        </main>
    </div>
</body>

</html>
