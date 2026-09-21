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

    <main class="relative min-h-screen overflow-hidden">

        {{-- Background accents --}}
        <div class="pointer-events-none absolute inset-0">

            <div
                class="absolute -right-20 -top-20 h-[420px] w-[420px] rounded-full bg-primary-600/10 blur-[130px]">
            </div>

            <div
                class="absolute -bottom-20 -left-20 h-[320px] w-[320px] rounded-full bg-primary-600/5 blur-[110px]">
            </div>

        </div>

        <div
            class="relative mx-auto grid min-h-screen max-w-7xl items-center gap-10 px-4 py-10 sm:px-6 lg:grid-cols-2 lg:px-8">

            {{-- Left side --}}
            <div class="hidden lg:block">

                <a href="{{ route('home') }}" class="inline-flex items-center">
                    <img
                        src="{{ asset('images/logo.png') }}"
                        alt="Moto Lab"
                        class="h-16 w-auto object-contain">
                </a>

                <div class="mt-12 max-w-lg">

                    <p class="text-sm font-semibold uppercase tracking-[0.22em] text-primary-500">
                        Administration Moto Lab
                    </p>

                    <h2
                        class="mt-4 font-heading text-4xl font-extrabold leading-tight tracking-tight text-white xl:text-5xl">
                        Gérez votre catalogue
                        <span class="text-primary-600">
                            simplement.
                        </span>
                    </h2>

                    <p class="mt-6 max-w-md text-base leading-7 text-moto-muted">
                        Accédez à votre espace d’administration pour gérer les motos,
                        les marques, les catégories et les contenus affichés sur le site.
                    </p>

                </div>

                <div class="mt-10 grid max-w-lg grid-cols-3 gap-4">

                    <div class="border-l border-moto-border pl-4">
                        <p class="font-heading text-xl font-bold text-white">
                            Motos
                        </p>

                        <p class="mt-1 text-sm text-moto-muted">
                            Catalogue
                        </p>
                    </div>

                    <div class="border-l border-moto-border pl-4">
                        <p class="font-heading text-xl font-bold text-white">
                            Marques
                        </p>

                        <p class="mt-1 text-sm text-moto-muted">
                            Gestion
                        </p>
                    </div>

                    <div class="border-l border-moto-border pl-4">
                        <p class="font-heading text-xl font-bold text-white">
                            Admin
                        </p>

                        <p class="mt-1 text-sm text-moto-muted">
                            Sécurisé
                        </p>
                    </div>

                </div>

            </div>


            {{-- Right side --}}
            <section class="mx-auto w-full max-w-md">

                {{-- Mobile logo --}}
                <div class="mb-8 flex justify-center lg:hidden">

                    <a href="{{ route('home') }}">
                        <img
                            src="{{ asset('images/logo.png') }}"
                            alt="Moto Lab"
                            class="h-14 w-auto object-contain">
                    </a>

                </div>


                <div
                    class="rounded-2xl border border-moto-border bg-moto-surface p-6 shadow-2xl shadow-black/20 sm:p-8">
                    @yield('content')
                </div>


                <p class="mt-6 text-center text-xs text-moto-muted">
                    © {{ date('Y') }} Moto Lab Casablanca
                </p>

            </section>

        </div>

    </main>

</body>

</html>