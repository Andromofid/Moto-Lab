<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')
    ->name('admin.')
    ->group(function () {

        /*
        |--------------------------------------------------------------------------
        | Guest Admin
        |--------------------------------------------------------------------------
        */

        Route::middleware('guest:admin')->group(function () {

            Route::get('/login', [AuthController::class, 'create'])
                ->name('login');

            Route::post('/login', [AuthController::class, 'store'])
                ->name('login.store');
        });

        /*
        |--------------------------------------------------------------------------
        | Authenticated Admin
        |--------------------------------------------------------------------------
        */

        Route::middleware('auth:admin')->group(function () {

            Route::get('/', [DashboardController::class, 'index'])
                ->name('dashboard');

            Route::post('/logout', [AuthController::class, 'destroy'])
                ->name('logout');

            // Route::resource('motos', MotoController::class);
            // Route::resource('brands', BrandController::class);
            // Route::resource('categories', CategoryController::class);
        });
    });
