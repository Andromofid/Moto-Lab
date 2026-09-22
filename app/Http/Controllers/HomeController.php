<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Moto;

class HomeController extends Controller
{
    public function index()
    {
        $brands = Brand::query()
            ->orderBy('name')
            ->get();

        $motos = Moto::query()
            ->with(['brand', 'category', 'images'])
            ->where('status', 'published')
            ->where('is_featured', true)
            ->latest()
            ->get();

        return view('welcome', compact('brands', 'motos'));
    }
}
