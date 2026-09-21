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
                    <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-primary-600 font-heading text-xl font-extrabold text-white">
                        M
                    </span>
                    <span>
                        <span class="block font-heading text-xl font-bold text-white">Moto Lab</span>
                        <span class="block text-xs font-semibold uppercase tracking-[0.22em] text-moto-muted">Admin</span>
                    </span>
                </a>

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
