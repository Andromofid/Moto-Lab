<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Moto;
use App\Models\MotoImage;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class MotoController extends Controller
{
    public function index(): View
    {
        return view('admin.motos.index', [
            'motos' => Moto::query()
                ->with(['brand', 'category', 'images'])
                ->latest()
                ->paginate(10),
        ]);
    }

    public function create(): View
    {
        return view('admin.motos.create', $this->formData(new Moto()));
    }

    public function store(Request $request): RedirectResponse
    {
        $moto = Moto::create($this->validatedData($request));

        $this->storeImages($request, $moto);

        return redirect()
            ->route('admin.motos.index')
            ->with('success', 'Moto créée avec succès.');
    }

    public function edit(Moto $moto): View
    {
        $moto->load(['images' => fn ($query) => $query->orderBy('position')]);

        return view('admin.motos.edit', $this->formData($moto));
    }

    public function update(Request $request, Moto $moto): RedirectResponse
    {
        $moto->update($this->validatedData($request, $moto));

        $this->storeImages($request, $moto);

        return redirect()
            ->route('admin.motos.index')
            ->with('success', 'Moto mise à jour avec succès.');
    }

    public function destroy(Moto $moto): RedirectResponse
    {
        $moto->load('images');

        foreach ($moto->images as $image) {
            $this->deleteImageFile($image);
        }

        $moto->delete();

        return redirect()
            ->route('admin.motos.index')
            ->with('success', 'Moto supprimée avec succès.');
    }

    public function destroyImage(MotoImage $motoImage): RedirectResponse
    {
        $this->deleteImageFile($motoImage);
        $motoImage->delete();

        return back()->with('success', 'Image supprimée avec succès.');
    }

    private function formData(Moto $moto): array
    {
        return [
            'moto' => $moto,
            'brands' => Brand::query()->orderBy('name')->get(),
            'categories' => Category::query()->orderBy('name')->get(),
            'statuses' => ['published', 'draft', 'sold'],
            'conditions' => ['Neuve', 'Occasion', 'Importée'],
        ];
    }

    private function validatedData(Request $request, ?Moto $moto = null): array
    {
        $uniqueSlugRule = Rule::unique('motos', 'slug');

        if ($moto?->exists) {
            $uniqueSlugRule->ignore($moto);
        }

        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', $uniqueSlugRule],
            'brand_id' => ['required', 'exists:brands,id'],
            'category_id' => ['nullable', 'exists:categories,id'],
            'year' => ['nullable', 'integer', 'min:1900', 'max:' . ((int) date('Y') + 1)],
            'price' => ['nullable', 'numeric', 'min:0'],
            'engine_cc' => ['nullable', 'integer', 'min:0'],
            'mileage' => ['nullable', 'integer', 'min:0'],
            'condition' => ['nullable', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'is_featured' => ['nullable', 'boolean'],
            'status' => ['required', 'string', Rule::in(['published', 'draft', 'sold'])],
            'images' => ['nullable', 'array'],
            'images.*' => ['image', 'max:4096'],
        ]);

        $data['slug'] = Str::slug($data['slug'] ?: $data['name']);
        $data['is_featured'] = $request->boolean('is_featured');

        validator($data, [
            'slug' => ['required', 'string', 'max:255', $uniqueSlugRule],
        ])->validate();

        unset($data['images']);

        return $data;
    }

    private function storeImages(Request $request, Moto $moto): void
    {
        if (! $request->hasFile('images')) {
            return;
        }

        $nextPosition = (int) $moto->images()->max('position') + 1;

        foreach ($request->file('images') as $image) {
            $path = $image->store('motos', 'public');

            $moto->images()->create([
                'image' => $path,
                'position' => $nextPosition++,
            ]);
        }
    }

    private function deleteImageFile(MotoImage $motoImage): void
    {
        if (! Str::startsWith($motoImage->image, ['http://', 'https://'])) {
            Storage::disk('public')->delete($motoImage->image);
        }
    }
}
