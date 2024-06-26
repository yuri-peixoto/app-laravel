<?php

use App\Enums\SupportStatus;
use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\Admin\{SupportController};
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contato', [SiteController::class, 'contact'])->name('site.contato');

Route::get('/supports', [SupportController::class, 'index'])->name('supports.index');
Route::get('/supports/create', [SupportController::class, 'create'])->name('supports.create');
Route::post('/supports', [SupportController::class, 'store'])->name('supports.store');
Route::get('/supports/{id}', [SupportController::class, 'show'])->name('supports.show');
Route::get('/supports/{id}/edit', [SupportController::class, 'edit'])->name('supports.edit');
Route::put('/supports/{id}', [SupportController::class, 'update'])->name('supports.update');
Route::delete('/supports/{id}', [SupportController::class, 'destroy'])->name('supports.destroy');

Route::get('/test', function () {
    dd(array_column(SupportStatus::cases(), 'name'));
});
