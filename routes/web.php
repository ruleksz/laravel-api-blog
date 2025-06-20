<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\BeritaController;

Route::prefix('admin')->group(function () {
    Route::get('berita', [BeritaController::class, 'index'])->name('admin.berita.index');
    Route::get('berita/create', [BeritaController::class, 'create'])->name('admin.berita.create');
    Route::post('berita', [BeritaController::class, 'store'])->name('admin.berita.store');
    Route::get('berita/{id}/edit', [BeritaController::class, 'edit'])->name('admin.berita.edit');
    Route::put('berita/{id}', [BeritaController::class, 'update'])->name('admin.berita.update');
    Route::delete('berita/{id}', [BeritaController::class, 'destroy'])->name('admin.berita.destroy');
});


Route::get('/', function () {
    return response()->json(['message' => 'API is running']);
});

