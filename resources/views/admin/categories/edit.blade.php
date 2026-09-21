@extends('admin.layouts.app', ['title' => 'Modifier une catégorie - Admin Moto Lab'])

@section('header')
    <div class="flex flex-col justify-between gap-4 sm:flex-row sm:items-end">
        <div>
            <p class="text-sm font-semibold uppercase tracking-[0.24em] text-primary-500">
                Modification
            </p>

            <h1 class="mt-3 font-heading text-3xl font-extrabold tracking-tight text-white">
                {{ $category->name }}
            </h1>

            <p class="mt-3 max-w-2xl text-sm leading-6 text-moto-muted">
                Mettez à jour les informations de cette catégorie.
            </p>
        </div>

        <a
            href="{{ route('admin.categories.index') }}"
            class="inline-flex w-fit items-center justify-center rounded-xl border border-moto-border px-5 py-3 text-sm font-semibold text-white transition hover:border-primary-600 hover:bg-primary-600">
            Retour aux catégories
        </a>
    </div>
@endsection

@section('content')
    <section class="mx-auto max-w-3xl rounded-3xl border border-moto-border bg-moto-surface p-6 shadow-xl shadow-black/10 sm:p-8">
        <form method="POST" action="{{ route('admin.categories.update', $category) }}">
            @method('PUT')

            @include('admin.categories.partials.form', [
                'category' => $category,
                'submitLabel' => 'Enregistrer les changements',
            ])
        </form>
    </section>
@endsection
