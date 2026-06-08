<?php

use App\Http\Api\NoteApiController;
use Illuminate\Support\Facades\Route;

Route::prefix('notes')->name('notes.')->group(function () {
    Route::get('/', [NoteApiController::class, 'index'])->name('index');
    Route::get('/trash', [NoteApiController::class, 'trash'])->name('trash');
    Route::post('/', [NoteApiController::class, 'store'])->name('store');
    Route::get('/search', [NoteApiController::class, 'search'])->name('search');
    Route::get('{id}', [NoteApiController::class, 'show'])->name('show');
    Route::put('{id}', [NoteApiController::class, 'update'])->name('update');
    Route::delete('{id}', [NoteApiController::class, 'destroy'])->name('destroy');
    Route::delete('/', [NoteApiController::class, 'destroyMultiples'])->name('destroyMultiples');
});
