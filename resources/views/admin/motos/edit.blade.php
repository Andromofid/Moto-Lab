@extends('admin.layouts.app', ['title' => 'Modifier une moto - Admin Moto Lab'])

@section('header')
    <div class="flex flex-col justify-between gap-4 sm:flex-row sm:items-end">
        <div>
            <p class="text-sm font-semibold uppercase tracking-[0.24em] text-primary-500">
                Modification
            </p>

            <h1 class="mt-3 font-heading text-3xl font-extrabold tracking-tight text-white">
                {{ $moto->name }}
            </h1>

            <p class="mt-3 max-w-2xl text-sm leading-6 text-moto-muted">
                Mettez à jour la fiche moto et gérez ses images.
            </p>
        </div>

        <a
            href="{{ route('admin.motos.index') }}"
            class="inline-flex w-fit items-center justify-center rounded-xl border border-moto-border px-5 py-3 text-sm font-semibold text-white transition hover:border-primary-600 hover:bg-primary-600">
            Retour aux motos
        </a>
    </div>
@endsection

@section('content')
    <div class="grid gap-8 lg:grid-cols-[1fr_360px]">
        <section class="rounded-3xl border border-moto-border bg-moto-surface p-6 shadow-xl shadow-black/10 sm:p-8">
            <form method="POST" action="{{ route('admin.motos.update', $moto) }}" enctype="multipart/form-data">
                @method('PUT')

                @include('admin.motos.partials.form', [
                    'moto' => $moto,
                    'brands' => $brands,
                    'categories' => $categories,
                    'statuses' => $statuses,
                    'conditions' => $conditions,
                    'submitLabel' => 'Enregistrer les changements',
                ])
            </form>
        </section>

        <aside class="h-fit rounded-3xl border border-moto-border bg-moto-surface p-6 shadow-xl shadow-black/10">
            <h2 class="font-heading text-xl font-bold text-white">
                Images actuelles
            </h2>

            <p class="mt-2 text-sm leading-6 text-moto-muted">
                Supprimez les images que vous ne souhaitez plus afficher.
            </p>

            @if ($moto->images->isNotEmpty())
                <div class="mt-6 grid gap-4">
                    @foreach ($moto->images as $image)
                        <div class="overflow-hidden rounded-2xl border border-moto-border bg-moto-black">
                            <img
                                src="{{ \Illuminate\Support\Str::startsWith($image->image, ['http://', 'https://']) ? $image->image : \Illuminate\Support\Facades\Storage::url($image->image) }}"
                                alt="{{ $moto->name }}"
                                class="h-40 w-full object-cover">

                            <form method="POST" action="{{ route('admin.moto-images.destroy', $image) }}" class="p-3">
                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    onclick="return confirm('Supprimer cette image ?')"
                                    class="w-full rounded-lg border border-moto-border px-4 py-2 text-sm font-semibold text-moto-muted transition hover:border-primary-600 hover:bg-primary-600 hover:text-white">
                                    Supprimer l'image
                                </button>
                            </form>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="mt-6 rounded-2xl border border-moto-border bg-moto-black px-5 py-8 text-center">
                    <p class="text-sm text-moto-muted">
                        Aucune image ajoutée pour cette moto.
                    </p>
                </div>
            @endif
        </aside>
    </div>
@endsection
