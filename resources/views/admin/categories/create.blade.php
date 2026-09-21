@extends('admin.layouts.app', ['title' => 'Ajouter une catégorie - Admin Moto Lab'])

@section('header')
    <div>
        <p class="text-sm font-semibold uppercase tracking-[0.24em] text-primary-500">
            Nouvelle catégorie
        </p>

        <h1 class="mt-3 font-heading text-3xl font-extrabold tracking-tight text-white">
            Ajouter une catégorie
        </h1>

        <p class="mt-3 max-w-2xl text-sm leading-6 text-moto-muted">
            Créez une catégorie pour organiser les motos du catalogue.
        </p>
    </div>
@endsection

@section('content')
    <section class="mx-auto max-w-3xl rounded-3xl border border-moto-border bg-moto-surface p-6 shadow-xl shadow-black/10 sm:p-8">
        <form method="POST" action="{{ route('admin.categories.store') }}">
            @include('admin.categories.partials.form', [
                'category' => $category,
                'submitLabel' => 'Créer la catégorie',
            ])
        </form>
    </section>
@endsection
