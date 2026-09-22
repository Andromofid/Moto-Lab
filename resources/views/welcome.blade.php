<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Moto Lab Casablanca</title>

    <meta
        name="description"
        content="Découvrez les meilleures motos à Casablanca chez Moto Lab. Benelli, Voge, Austin et plus.">

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Montserrat:wght@600;700;800&display=swap"
        rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        .font-heading {
            font-family: 'Montserrat', sans-serif;
        }
    </style>
</head>

<body class="bg-moto-black text-moto-text antialiased">

    <x-nav />


    <main>

        {{-- ====================================================== --}}
        {{-- Hero --}}
        {{-- ====================================================== --}}

        <section
            id="home"
            class="relative overflow-hidden">

            {{-- Background effects --}}
            <div
                class="pointer-events-none absolute -right-24 -top-24
               h-[320px] w-[320px] rounded-full
               bg-primary-600/10 blur-[100px]
               sm:h-[420px] sm:w-[420px]
               lg:h-[600px] lg:w-[600px] lg:blur-[140px]">
            </div>

            <div
                class="pointer-events-none absolute left-1/2 top-1/2
               h-[220px] w-[220px] -translate-x-1/2 -translate-y-1/2
               rounded-full bg-primary-600/5 blur-[90px]
               sm:h-[300px] sm:w-[300px]
               lg:h-[400px] lg:w-[400px] lg:blur-[120px]">
            </div>


            <div
                class="relative mx-auto grid max-w-7xl items-center
               gap-10 px-4 py-12
               sm:px-6 sm:py-16
               md:grid-cols-2 md:gap-8
               lg:min-h-[650px] lg:gap-12 lg:px-8 lg:py-16">

                {{-- Content --}}
                <div
                    class="relative z-10
                   text-center
                   md:text-left">

                    {{-- Badge --}}
                    <div
                        class="mb-5 inline-flex items-center gap-2
                       rounded-full border border-primary-600/30
                       bg-primary-600/10
                       px-3 py-2
                       text-xs font-medium text-primary-400
                       sm:px-4 sm:text-sm">

                        <span class="h-2 w-2 rounded-full bg-primary-600"></span>

                        Concessionnaire à Casablanca

                    </div>


                    {{-- Title --}}
                    <h1
                        class="font-heading mx-auto max-w-xl
                       text-3xl font-extrabold leading-tight tracking-tight text-white
                       sm:text-4xl
                       md:mx-0 md:text-4xl
                       lg:max-w-2xl lg:text-5xl
                       xl:text-6xl">
                        Découvrez les meilleures

                        <span class="text-primary-600">
                            motos
                        </span>

                        à Casablanca
                    </h1>


                    {{-- Text --}}
                    <p
                        class="mx-auto mt-5 max-w-xl
                       text-sm leading-6 text-moto-muted
                       sm:text-base sm:leading-7
                       md:mx-0
                       lg:mt-6 lg:text-lg">
                        Explorez notre sélection de motos et scooters.
                        Retrouvez des marques reconnues, des modèles modernes
                        et un accompagnement professionnel chez Moto Lab.
                    </p>


                    {{-- Buttons --}}
                    <div
                        class="mt-7 flex flex-col gap-3
                       sm:flex-row sm:justify-center
                       md:justify-start">

                        <a
                            href="#motos"
                            class="inline-flex min-h-12 items-center justify-center gap-2
                           rounded-lg bg-primary-600
                           px-6 py-3
                           text-sm font-semibold text-white
                           transition hover:bg-primary-700">
                            Explorer les motos

                            <svg
                                class="h-4 w-4"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M17 8l4 4m0 0-4 4m4-4H3" />
                            </svg>
                        </a>


                        <a
                            href="#contact"
                            class="inline-flex min-h-12 items-center justify-center
                           rounded-lg border border-moto-border
                           bg-moto-surface
                           px-6 py-3
                           text-sm font-semibold text-white
                           transition
                           hover:border-primary-600
                           hover:bg-moto-surface-light">
                            Nous contacter
                        </a>

                    </div>


                    {{-- Trust --}}
                    <div
                        class="mt-8 grid grid-cols-3 gap-4
                       border-t border-moto-border pt-6
                       sm:mt-10 sm:gap-6 sm:pt-8
                       md:max-w-lg">

                        <div>
                            <div
                                class="font-heading text-xl font-bold text-white
                               sm:text-2xl">
                                3+
                            </div>

                            <div class="mt-1 text-xs text-moto-muted sm:text-sm">
                                Marques
                            </div>
                        </div>


                        <div>
                            <div
                                class="font-heading text-xl font-bold text-white
                               sm:text-2xl">
                                50+
                            </div>

                            <div class="mt-1 text-xs text-moto-muted sm:text-sm">
                                Modèles
                            </div>
                        </div>


                        <div>
                            <div
                                class="font-heading text-xl font-bold text-white
                               sm:text-2xl">
                                Casa
                            </div>

                            <div class="mt-1 text-xs text-moto-muted sm:text-sm">
                                Showroom
                            </div>
                        </div>

                    </div>

                </div>


                {{-- Hero Moto --}}
                <div
                    class="relative hidden md:block flex min-h-[280px] items-center justify-center
                   sm:min-h-[360px]
                   md:min-h-[420px]
                   lg:min-h-[520px]">

                    {{-- Red circle --}}
                    <div
                        class="absolute
                       h-[220px] w-[220px]
                       rounded-full
                       border border-primary-600/30
                       bg-primary-600/10
                       shadow-2xl shadow-primary-600/25
                       sm:h-[300px] sm:w-[300px]
                       md:h-[340px] md:w-[340px]
                       lg:h-[420px] lg:w-[420px]">
                    </div>


                    {{-- Decorative square --}}
                    <div
                        class="absolute
                       h-[190px] w-[190px]
                       rotate-12
                       border border-white/5
                       sm:h-[270px] sm:w-[270px]
                       md:h-[320px] md:w-[320px]
                       lg:h-[430px] lg:w-[430px]">
                    </div>


                    {{-- Moto --}}
                    <img
                        src="{{ asset('images/hero-moto.png') }}"
                        alt="Moto sportive Moto Lab Casablanca"
                        class="relative z-10
                       w-full max-w-[320px]
                       object-contain
                       drop-shadow-2xl
                       sm:max-w-[420px]
                       md:max-w-[460px]
                       lg:max-w-[600px]">


                    {{-- Badge --}}
                    <div
                        class="absolute right-0 top-6 z-20
                       hidden rounded-xl
                       border border-moto-border
                       bg-moto-surface/90
                       px-4 py-3
                       shadow-xl backdrop-blur
                       lg:block">

                        <div class="flex items-center gap-3">

                            <div
                                class="flex h-9 w-9 items-center justify-center
                               rounded-lg
                               bg-primary-600/20
                               text-primary-600">
                                ✓
                            </div>

                            <div>

                                <p class="text-xs text-moto-muted">
                                    Moto Lab
                                </p>

                                <p class="text-sm font-semibold text-white">
                                    Concessionnaire
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        {{-- ====================================================== --}}
        {{-- Brands --}}
        {{-- ====================================================== --}}

        <section
            id="marques"
            class="border-y border-moto-border bg-moto-text">

            <div class="mx-auto max-w-7xl px-4 py-7 sm:px-6 lg:px-8">

                <p
                    class="mb-6 text-center text-xs font-bold uppercase tracking-[0.25em] text-gray-500">
                    Nos marques
                </p>

                <div
                    class="flex flex-wrap items-center justify-center gap-x-12 gap-y-6 text-center">

                    @foreach ($brands as $brand)

                    <div class="flex items-center justify-center">

                        <span
                            class="font-heading text-xl font-bold text-moto-surface">
                            {{ $brand->name }}
                        </span>

                    </div>

                    @endforeach

                </div>

            </div>

        </section>


        {{-- ====================================================== --}}
        {{-- Featured Motos --}}
        {{-- ====================================================== --}}

        <section
            id="motos"
            class="py-20 lg:py-28">

            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

                {{-- Heading --}}
                <div class="flex flex-col justify-between gap-6 sm:flex-row sm:items-end">

                    <div>

                        <span
                            class="text-sm font-semibold uppercase tracking-widest text-primary-600">
                            Notre sélection
                        </span>

                        <h2
                            class="font-heading mt-3 text-3xl font-bold text-white sm:text-4xl">
                            Motos en vedette
                        </h2>

                        <p class="mt-3 max-w-xl text-moto-muted">
                            Découvrez une sélection des modèles disponibles chez Moto Lab.
                        </p>

                    </div>


                    <a
                        href="#"
                        class="inline-flex items-center gap-2 text-sm font-semibold text-white transition hover:text-primary-600">
                        Voir toutes les motos

                        <span>→</span>
                    </a>

                </div>


                {{-- Cards --}}
                @if($motos->isEmpty())
                <p class="text-moto-muted flex items-center justify-center mt-10">Aucune moto disponible pour le moment.</p>
                @else
                <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-4  ">

                    @foreach ($motos as $moto)
                    <article
                        class="group overflow-hidden rounded-2xl border border-moto-border
                           bg-moto-surface transition duration-300
                           hover:-translate-y-1 hover:border-primary-600/60">

                        {{-- Image --}}
                        <div
                            class="relative flex h-56 items-center justify-center overflow-hidden bg-moto-black">

                            <div
                                class="absolute h-32 w-32 rounded-full bg-primary-600/15 blur-3xl"></div>

                            <img
                                src="{{ asset('/storage/'.$moto->images?->first()?->image) }}"
                                alt="{{ $moto->name }}"
                                class="relative z-10 h-full w-full object-contain p-5 transition duration-500
                                   group-hover:scale-105">

                            <span
                                class="absolute right-3 top-3 rounded-md bg-primary-600
                                   px-2.5 py-1 text-xs font-semibold text-white z-20">
                                Disponible
                            </span>

                        </div>


                        <div class="p-5">

                            <p
                                class="text-xs font-semibold uppercase tracking-wider text-primary-600">
                                {{ $moto->category->name }}
                            </p>

                            <h3
                                class="font-heading mt-2 text-lg font-bold text-white">
                                {{ $moto->name}}
                            </h3>


                            <div class="mt-5 flex items-center justify-between">

                                <span class="font-heading text-lg font-bold text-white">
                                    {{ $moto->price }} DH
                                </span>

                            </div>


                            <a
                                href="#"
                                class="mt-5 flex w-full items-center justify-center rounded-lg
                                   border border-moto-border px-4 py-3 text-sm font-semibold
                                   text-white transition hover:border-primary-600
                                   hover:bg-primary-600">
                                Voir détails
                            </a>

                        </div>

                    </article>

                    @endforeach

                </div>
                @endif

            </div>

        </section>


        {{-- ====================================================== --}}
        {{-- Why Moto Lab --}}
        {{-- ====================================================== --}}

        <section class="border-y border-moto-border bg-moto-surface py-20">

            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

                <div class="text-center">

                    <span class="text-sm font-semibold uppercase tracking-widest text-primary-600">
                        Moto Lab
                    </span>

                    <h2 class="font-heading mt-3 text-3xl font-bold text-white">
                        Pourquoi nous choisir ?
                    </h2>

                </div>


                <div class="mt-12 grid gap-8 sm:grid-cols-2 lg:grid-cols-4">

                    {{-- Item --}}
                    <div>

                        <div
                            class="flex h-12 w-12 items-center justify-center rounded-xl
                           bg-primary-600/10 text-primary-600">
                            <svg
                                class="h-6 w-6"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                        </div>

                        <h3 class="font-heading mt-5 text-lg font-bold">
                            Marques officielles
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-moto-muted">
                            Découvrez une sélection de marques reconnues et de modèles modernes.
                        </p>

                    </div>


                    <div>

                        <div
                            class="flex h-12 w-12 items-center justify-center rounded-xl
                           bg-primary-600/10 text-primary-600">
                            <svg
                                class="h-6 w-6"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    stroke-width="2"
                                    d="M3 13h18M5 17h14M7 9h10" />
                            </svg>
                        </div>

                        <h3 class="font-heading mt-5 text-lg font-bold">
                            Large choix de motos
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-moto-muted">
                            Scooters, naked, adventure et plusieurs autres catégories.
                        </p>

                    </div>


                    <div>

                        <div
                            class="flex h-12 w-12 items-center justify-center rounded-xl
                           bg-primary-600/10 text-primary-600">
                            <svg
                                class="h-6 w-6"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    stroke-width="2"
                                    d="M12 12c2.761 0 5-2.239 5-5s-2.239-5-5-5-5 2.239-5 5 2.239 5 5 5zm0 2c-4.418 0-8 2.239-8 5v1h16v-1c0-2.761-3.582-5-8-5z" />
                            </svg>
                        </div>

                        <h3 class="font-heading mt-5 text-lg font-bold">
                            Service client
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-moto-muted">
                            Une équipe disponible pour vous conseiller et vous accompagner.
                        </p>

                    </div>


                    <div>

                        <div
                            class="flex h-12 w-12 items-center justify-center rounded-xl
                           bg-primary-600/10 text-primary-600">
                            <svg
                                class="h-6 w-6"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    stroke-width="2"
                                    d="M12 21s6-5.686 6-11a6 6 0 10-12 0c0 5.314 6 11 6 11z" />
                                <circle cx="12" cy="10" r="2" stroke-width="2" />
                            </svg>
                        </div>

                        <h3 class="font-heading mt-5 text-lg font-bold">
                            Showroom à Casablanca
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-moto-muted">
                            Venez découvrir nos motos directement dans notre showroom.
                        </p>

                    </div>

                </div>

            </div>

        </section>


        {{-- ====================================================== --}}
        {{-- About --}}
        {{-- ====================================================== --}}

        <section
            id="about"
            class="py-20 lg:py-28">

            <div
                class="mx-auto grid max-w-7xl items-center gap-12 px-4 sm:px-6 lg:grid-cols-2 lg:px-8">

                {{-- Image --}}
                <div class="relative">

                    <div
                        class="absolute -left-5 -top-5 h-28 w-28 rounded-2xl
                       bg-primary-600/20 blur-3xl"></div>

                    <div
                        class="relative overflow-hidden rounded-2xl border border-moto-border">

                        <img
                            src="{{ asset('images/Showroom.jpg') }}"
                            alt="Showroom Moto Lab Casablanca"
                            class="h-[500px] w-full positioned object-cover transition duration-500 hover:scale-105">

                    </div>

                </div>


                {{-- Content --}}
                <div>

                    <span
                        class="text-sm font-semibold uppercase tracking-widest text-primary-600">
                        À propos
                    </span>

                    <h2
                        class="font-heading mt-3 text-3xl font-bold leading-tight text-white sm:text-4xl">
                        Moto Lab Casablanca
                    </h2>

                    <p class="mt-6 leading-7 text-moto-muted">
                        Moto Lab vous accompagne dans le choix de votre prochaine moto.
                        Notre objectif est de proposer une expérience simple,
                        transparente et adaptée aux besoins de chaque passionné.
                    </p>

                    <p class="mt-4 leading-7 text-moto-muted">
                        Découvrez notre sélection de motos Benelli, Voge,
                        Austin et plusieurs modèles directement dans notre showroom à Casablanca.
                    </p>


                    <a
                        href="#contact"
                        class="mt-8 inline-flex rounded-lg bg-primary-600
                       px-6 py-3.5 text-sm font-semibold text-white
                       transition hover:bg-primary-700">
                        Découvrir Moto Lab
                    </a>

                </div>

            </div>

        </section>


        {{-- ====================================================== --}}
        {{-- CTA --}}
        {{-- ====================================================== --}}

        <section class="px-4 pb-20 sm:px-6 lg:px-8 lg:pb-28">

            <div
                class="relative mx-auto max-w-7xl overflow-hidden rounded-2xl bg-primary-600
               px-6 py-12 text-center sm:px-12 lg:py-16">

                <div
                    class="absolute -right-20 -top-20 h-64 w-64 rounded-full border border-white/10"></div>

                <div
                    class="absolute -bottom-32 -left-20 h-64 w-64 rounded-full border border-white/10"></div>


                <div class="relative z-10">

                    <h2
                        class="font-heading text-3xl font-bold text-white sm:text-4xl">
                        Trouvez votre prochaine moto dès aujourd’hui
                    </h2>

                    <p class="mx-auto mt-4 max-w-2xl text-white/75">
                        Explorez notre catalogue et découvrez le modèle qui correspond
                        à votre style et à vos besoins.
                    </p>

                    <a
                        href="#motos"
                        class="mt-8 inline-flex rounded-lg bg-moto-black
                       px-7 py-3.5 text-sm font-semibold text-white
                       transition hover:bg-moto-surface">
                        Voir notre catalogue
                    </a>

                </div>

            </div>

        </section>

    </main>

    <x-footer />

</body>

</html>