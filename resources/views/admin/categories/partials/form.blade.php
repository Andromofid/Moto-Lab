@csrf

<div class="grid gap-6">
    <div>
        <label for="name" class="block text-sm font-semibold text-white">
            Nom de la catégorie
        </label>

        <input
            id="name"
            name="name"
            type="text"
            value="{{ old('name', $category->name) }}"
            required
            autofocus
            class="mt-2 block w-full rounded-xl border border-moto-border bg-moto-black px-4 py-3 text-sm text-white outline-none transition placeholder:text-moto-muted focus:border-primary-600 focus:ring-2 focus:ring-primary-600/20"
            placeholder="Ex: Scooter">

        @error('name')
            <p class="mt-2 text-sm text-primary-400">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="slug" class="block text-sm font-semibold text-white">
            Slug
        </label>

        <input
            id="slug"
            name="slug"
            type="text"
            value="{{ old('slug', $category->slug) }}"
            class="mt-2 block w-full rounded-xl border border-moto-border bg-moto-black px-4 py-3 text-sm text-white outline-none transition placeholder:text-moto-muted focus:border-primary-600 focus:ring-2 focus:ring-primary-600/20"
            placeholder="Laissez vide pour générer automatiquement">

        <p class="mt-2 text-xs leading-5 text-moto-muted">
            Utilisé dans les URLs. Exemple : <span class="font-semibold text-white">scooter</span>.
        </p>

        @error('slug')
            <p class="mt-2 text-sm text-primary-400">{{ $message }}</p>
        @enderror
    </div>
</div>

<div class="mt-8 flex flex-col-reverse gap-3 sm:flex-row sm:justify-end">
    <a
        href="{{ route('admin.categories.index') }}"
        class="inline-flex items-center justify-center rounded-xl border border-moto-border px-5 py-3 text-sm font-semibold text-white transition hover:border-primary-600 hover:bg-moto-surface-light">
        Annuler
    </a>

    <button
        type="submit"
        class="inline-flex items-center justify-center rounded-xl bg-primary-600 px-5 py-3 text-sm font-bold text-white transition hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-primary-600 focus:ring-offset-2 focus:ring-offset-moto-surface">
        {{ $submitLabel }}
    </button>
</div>
