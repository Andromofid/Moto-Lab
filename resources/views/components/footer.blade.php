<footer
    id="contact"
    class="border-t border-moto-border bg-moto-black">

    <div class="mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8">

        <div class="grid gap-10 md:grid-cols-2 lg:grid-cols-4">

            {{-- Brand --}}
            <div>

                <h3 class="font-heading text-xl font-bold text-white">
                    Moto Lab
                </h3>

                <p class="mt-4 max-w-xs text-sm leading-6 text-moto-muted">
                    Votre showroom de motos à Casablanca.
                </p>

            </div>


            {{-- Navigation --}}
            <div>

                <h4 class="font-semibold text-white">
                    Navigation
                </h4>

                <div class="mt-4 flex flex-col gap-3 text-sm text-moto-muted">

                    <a href="{{ route('home') }}#home" class="hover:text-white">
                        Accueil
                    </a>

                    <a href="{{ route('motos.index') }}" class="hover:text-white">
                        Motos
                    </a>

                    <a href="{{ route('home') }}#marques" class="hover:text-white">
                        Marques
                    </a>

                    <a href="{{ route('home') }}#about" class="hover:text-white">
                        À propos
                    </a>

                    <a href="{{ route('contact.create') }}" class="hover:text-white">
                        Contact
                    </a>

                </div>

            </div>


            {{-- Contact --}}
            <div>

                <h4 class="font-semibold text-white">
                    Contact
                </h4>

                <div class="mt-4 space-y-3 text-sm text-moto-muted">

                    <p>
                        Oulfa, Casablanca
                    </p>

                    <p>
                        +212 6 XX XX XX XX
                    </p>

                    <p>
                        contact@motolab.ma
                    </p>

                </div>

            </div>


            {{-- Social --}}
            <div>

                <h4 class="font-semibold text-white">
                    Suivez-nous
                </h4>

                <p class="mt-4 text-sm text-moto-muted">
                    Retrouvez Moto Lab sur les réseaux sociaux.
                </p>

                <div class="mt-5 flex gap-3">

                    <a
                        href="#"
                        class="flex h-10 w-10 items-center justify-center rounded-lg
                           border border-moto-border text-sm text-white
                           transition hover:border-primary-600
                           hover:bg-primary-600">
                        IG
                    </a>

                    <a
                        href="#"
                        class="flex h-10 w-10 items-center justify-center rounded-lg
                           border border-moto-border text-sm text-white
                           transition hover:border-primary-600
                           hover:bg-primary-600">
                        FB
                    </a>

                </div>

            </div>

        </div>


        <div
            class="mt-10 flex flex-col justify-between gap-4 border-t
               border-moto-border pt-6 text-sm text-moto-muted
               sm:flex-row">

            <p>
                © {{ date('Y') }} Moto Lab Casablanca. Tous droits réservés.
            </p>

            <p>
                Casablanca, Maroc
            </p>

        </div>

    </div>

</footer>
