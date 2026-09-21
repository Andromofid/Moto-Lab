@extends('admin.layouts.app', ['title' => 'Marques - Admin Moto Lab'])

@section('header')
    <div class="flex flex-col justify-between gap-4 sm:flex-row sm:items-end">
        <div>
            <p class="text-sm font-semibold uppercase tracking-[0.24em] text-primary-500">
                Catalogue
            </p>

            <h1 class="mt-3 font-heading text-3xl font-extrabold tracking-tight text-white">
                Marques
            </h1>

            <p class="mt-3 max-w-2xl text-sm leading-6 text-moto-muted">
                Gérez les marques affichées sur le site Moto Lab.
            </p>
        </div>

        <a
            href="{{ route('admin.brands.create') }}"
            class="inline-flex w-fit items-center justify-center rounded-xl bg-primary-600 px-5 py-3 text-sm font-bold text-white transition hover:bg-primary-700">
            Ajouter une marque
        </a>
    </div>
@endsection

@section('content')
    @if (session('success'))
        <div class="mb-6 rounded-2xl border border-primary-600/30 bg-primary-600/10 px-5 py-4 text-sm font-semibold text-primary-400">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="mb-6 rounded-2xl border border-primary-600/30 bg-primary-600/10 px-5 py-4 text-sm font-semibold text-primary-400">
            {{ session('error') }}
        </div>
    @endif

    <section class="overflow-hidden rounded-3xl border border-moto-border bg-moto-surface">
        <div class="flex items-center justify-between border-b border-moto-border px-6 py-5">
            <div>
                <h2 class="font-heading text-xl font-bold text-white">
                    Liste des marques
                </h2>

                <p class="mt-1 text-sm text-moto-muted">
                    {{ $brands->total() }} marque(s) enregistrée(s).
                </p>
            </div>
        </div>

        @if ($brands->isNotEmpty())
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-moto-border">
                    <thead class="bg-moto-black/50">
                        <tr>
                            <th class="px-6 py-4 text-left text-xs font-bold uppercase tracking-[0.18em] text-moto-muted">
                                Marque
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-bold uppercase tracking-[0.18em] text-moto-muted">
                                Slug
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-bold uppercase tracking-[0.18em] text-moto-muted">
                                Motos
                            </th>
                            <th class="px-6 py-4 text-right text-xs font-bold uppercase tracking-[0.18em] text-moto-muted">
                                Actions
                            </th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-moto-border">
                        @foreach ($brands as $brand)
                            <tr class="transition hover:bg-moto-surface-light">
                                <td class="whitespace-nowrap px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-primary-600/10 font-heading text-sm font-bold text-primary-400">
                                            {{ \Illuminate\Support\Str::upper(\Illuminate\Support\Str::substr($brand->name, 0, 2)) }}
                                        </div>

                                        <div>
                                            <div class="font-semibold text-white">
                                                {{ $brand->name }}
                                            </div>

                                            <div class="mt-1 text-xs text-moto-muted">
                                                Créée le {{ $brand->created_at?->format('d/m/Y') }}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="whitespace-nowrap px-6 py-4 text-sm text-moto-muted">
                                    {{ $brand->slug }}
                                </td>
                                <td class="whitespace-nowrap px-6 py-4">
                                    <span class="rounded-full bg-primary-600/10 px-3 py-1 text-xs font-bold uppercase tracking-wide text-primary-400">
                                        {{ $brand->motos_count }} moto(s)
                                    </span>
                                </td>
                                <td class="whitespace-nowrap px-6 py-4">
                                    <div class="flex justify-end gap-3">
                                        <a
                                            href="{{ route('admin.brands.edit', $brand) }}"
                                            class="rounded-lg border border-moto-border px-4 py-2 text-sm font-semibold text-white transition hover:border-primary-600 hover:bg-primary-600">
                                            Modifier
                                        </a>

                                        <form method="POST" action="{{ route('admin.brands.destroy', $brand) }}">
                                            @csrf
                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                onclick="return confirm('Supprimer cette marque ?')"
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
                {{ $brands->links() }}
            </div>
        @else
            <div class="px-6 py-14 text-center">
                <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-primary-600/10 font-heading font-bold text-primary-500">
                    M
                </div>

                <h3 class="mt-5 font-heading text-xl font-bold text-white">
                    Aucune marque enregistrée
                </h3>

                <p class="mx-auto mt-2 max-w-md text-sm leading-6 text-moto-muted">
                    Ajoutez votre première marque pour commencer à organiser le catalogue.
                </p>

                <a
                    href="{{ route('admin.brands.create') }}"
                    class="mt-6 inline-flex items-center justify-center rounded-xl bg-primary-600 px-5 py-3 text-sm font-bold text-white transition hover:bg-primary-700">
                    Ajouter une marque
                </a>
            </div>
        @endif
    </section>
@endsection
