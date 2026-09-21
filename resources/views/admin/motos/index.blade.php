@extends('admin.layouts.app', ['title' => 'Motos - Admin Moto Lab'])

@section('header')
    <div class="flex flex-col justify-between gap-4 sm:flex-row sm:items-end">
        <div>
            <p class="text-sm font-semibold uppercase tracking-[0.24em] text-primary-500">
                Catalogue
            </p>

            <h1 class="mt-3 font-heading text-3xl font-extrabold tracking-tight text-white">
                Motos
            </h1>

            <p class="mt-3 max-w-2xl text-sm leading-6 text-moto-muted">
                Gérez les motos, leurs informations, leurs statuts et leurs images.
            </p>
        </div>

        <a
            href="{{ route('admin.motos.create') }}"
            class="inline-flex w-fit items-center justify-center rounded-xl bg-primary-600 px-5 py-3 text-sm font-bold text-white transition hover:bg-primary-700">
            Ajouter une moto
        </a>
    </div>
@endsection

@section('content')
    @if (session('success'))
        <div class="mb-6 rounded-2xl border border-primary-600/30 bg-primary-600/10 px-5 py-4 text-sm font-semibold text-primary-400">
            {{ session('success') }}
        </div>
    @endif

    <section class="overflow-hidden rounded-3xl border border-moto-border bg-moto-surface">
        <div class="flex items-center justify-between border-b border-moto-border px-6 py-5">
            <div>
                <h2 class="font-heading text-xl font-bold text-white">
                    Liste des motos
                </h2>

                <p class="mt-1 text-sm text-moto-muted">
                    {{ $motos->total() }} moto(s) enregistrée(s).
                </p>
            </div>
        </div>

        @if ($motos->isNotEmpty())
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
                            <th class="px-6 py-4 text-right text-xs font-bold uppercase tracking-[0.18em] text-moto-muted">
                                Actions
                            </th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-moto-border">
                        @foreach ($motos as $moto)
                            @php
                                $cover = $moto->images->sortBy('position')->first();
                                $coverUrl = $cover
                                    ? (\Illuminate\Support\Str::startsWith($cover->image, ['http://', 'https://'])
                                        ? $cover->image
                                        : \Illuminate\Support\Facades\Storage::url($cover->image))
                                    : null;
                            @endphp

                            <tr class="transition hover:bg-moto-surface-light">
                                <td class="min-w-72 px-6 py-4">
                                    <div class="flex items-center gap-4">
                                        @if ($coverUrl)
                                            <img src="{{ $coverUrl }}" alt="{{ $moto->name }}" class="h-16 w-20 rounded-xl object-cover">
                                        @else
                                            <div class="flex h-16 w-20 items-center justify-center rounded-xl bg-primary-600/10 font-heading text-lg font-bold text-primary-400">
                                                M
                                            </div>
                                        @endif

                                        <div>
                                            <div class="font-semibold text-white">
                                                {{ $moto->name }}
                                            </div>

                                            <div class="mt-1 text-sm text-moto-muted">
                                                {{ $moto->year ?? 'Année non définie' }}
                                                @if ($moto->is_featured)
                                                    <span class="ml-2 rounded-full bg-primary-600/10 px-2 py-0.5 text-xs font-bold text-primary-400">
                                                        Vedette
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
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
                                <td class="whitespace-nowrap px-6 py-4">
                                    <div class="flex justify-end gap-3">
                                        <a
                                            href="{{ route('admin.motos.edit', $moto) }}"
                                            class="rounded-lg border border-moto-border px-4 py-2 text-sm font-semibold text-white transition hover:border-primary-600 hover:bg-primary-600">
                                            Modifier
                                        </a>

                                        <form method="POST" action="{{ route('admin.motos.destroy', $moto) }}">
                                            @csrf
                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                onclick="return confirm('Supprimer cette moto et ses images ?')"
                                                class="rounded-lg border border-moto-border px-4 py-2 text-sm font-semibold text-moto-muted transition hover:border-primary-600 hover:bg-primary-600 hover:text-white">
                                                Supprimer
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="border-t border-moto-border px-6 py-4">
                {{ $motos->links() }}
            </div>
        @else
            <div class="px-6 py-14 text-center">
                <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-primary-600/10 font-heading font-bold text-primary-500">
                    M
                </div>

                <h3 class="mt-5 font-heading text-xl font-bold text-white">
                    Aucune moto enregistrée
                </h3>

                <p class="mx-auto mt-2 max-w-md text-sm leading-6 text-moto-muted">
                    Ajoutez votre première moto pour commencer à alimenter le catalogue.
                </p>

                <a
                    href="{{ route('admin.motos.create') }}"
                    class="mt-6 inline-flex items-center justify-center rounded-xl bg-primary-600 px-5 py-3 text-sm font-bold text-white transition hover:bg-primary-700">
                    Ajouter une moto
                </a>
            </div>
        @endif
    </section>
@endsection
