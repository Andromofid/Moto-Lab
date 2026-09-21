@extends('admin.layouts.app', ['title' => 'Dashboard admin - Moto Lab'])

@section('header')
    <div class="flex flex-col justify-between gap-4 sm:flex-row sm:items-end">
        <div>
            <p class="text-sm font-semibold uppercase tracking-[0.24em] text-primary-500">
                Tableau de bord
            </p>

            <h1 class="mt-3 font-heading text-3xl font-extrabold tracking-tight text-white">
                Bienvenue, {{ Auth::guard('admin')->user()?->name }}
            </h1>

            <p class="mt-3 max-w-2xl text-sm leading-6 text-moto-muted">
                Suivez rapidement l'état du catalogue Moto Lab et les dernières motos ajoutées.
            </p>
        </div>

        <a
            href="{{ route('home') }}"
            class="inline-flex w-fit items-center justify-center rounded-xl border border-moto-border px-5 py-3 text-sm font-semibold text-white transition hover:border-primary-600 hover:bg-primary-600">
            Voir le site
        </a>
    </div>
@endsection

@section('content')
    <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
        @foreach ($stats as $stat)
            <article class="rounded-2xl border border-moto-border bg-moto-surface p-6 shadow-xl shadow-black/10">
                <p class="text-sm font-semibold text-moto-muted">
                    {{ $stat['label'] }}
                </p>

                <p class="mt-4 font-heading text-4xl font-extrabold text-white">
                    {{ $stat['value'] }}
                </p>

                <p class="mt-2 text-sm text-moto-muted">
                    {{ $stat['hint'] }}
                </p>
            </article>
        @endforeach
    </div>

    <section class="mt-8 overflow-hidden rounded-3xl border border-moto-border bg-moto-surface">
        <div class="flex flex-col justify-between gap-4 border-b border-moto-border px-6 py-5 sm:flex-row sm:items-center">
            <div>
                <h2 class="font-heading text-xl font-bold text-white">
                    Dernières motos
                </h2>

                <p class="mt-1 text-sm text-moto-muted">
                    Les 5 dernières entrées du catalogue.
                </p>
            </div>

            <span class="w-fit rounded-full bg-primary-600/10 px-4 py-2 text-xs font-bold uppercase tracking-[0.18em] text-primary-400">
                Catalogue
            </span>
        </div>

        @if ($recentMotos->isNotEmpty())
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-moto-border">
                    <thead class="bg-moto-black/50">
                        <tr>
                            <th class="px-6 py-4 text-left text-xs font-bold uppercase tracking-[0.18em] text-moto-muted">
                                Moto
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-bold uppercase tracking-[0.18em] text-moto-muted">
                                Marque
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-bold uppercase tracking-[0.18em] text-moto-muted">
                                Catégorie
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-bold uppercase tracking-[0.18em] text-moto-muted">
                                Prix
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-bold uppercase tracking-[0.18em] text-moto-muted">
                                Statut
                            </th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-moto-border">
                        @foreach ($recentMotos as $moto)
                            <tr class="transition hover:bg-moto-surface-light">
                                <td class="whitespace-nowrap px-6 py-4">
                                    <div class="font-semibold text-white">
                                        {{ $moto->name }}
                                    </div>

                                    <div class="mt-1 text-sm text-moto-muted">
                                        {{ $moto->year ?? 'Année non définie' }}
                                    </div>
                                </td>
                                <td class="whitespace-nowrap px-6 py-4 text-sm text-moto-muted">
                                    {{ $moto->brand?->name ?? 'Non définie' }}
                                </td>
                                <td class="whitespace-nowrap px-6 py-4 text-sm text-moto-muted">
                                    {{ $moto->category?->name ?? 'Non définie' }}
                                </td>
                                <td class="whitespace-nowrap px-6 py-4 text-sm font-semibold text-white">
                                    @if ($moto->price)
                                        {{ number_format((float) $moto->price, 0, ',', ' ') }} DH
                                    @else
                                        Sur demande
                                    @endif
                                </td>
                                <td class="whitespace-nowrap px-6 py-4">
                                    <span class="rounded-full bg-primary-600/10 px-3 py-1 text-xs font-bold uppercase tracking-wide text-primary-400">
                                        {{ $moto->status }}
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="px-6 py-14 text-center">
                <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-primary-600/10 text-primary-500">
                    M
                </div>

                <h3 class="mt-5 font-heading text-xl font-bold text-white">
                    Aucune moto pour le moment
                </h3>

                <p class="mx-auto mt-2 max-w-md text-sm leading-6 text-moto-muted">
                    Le tableau de bord est prêt. Les dernières motos apparaîtront ici dès que le catalogue sera alimenté.
                </p>
            </div>
        @endif
    </section>
@endsection

