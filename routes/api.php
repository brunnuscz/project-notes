<?php

use App\Http\Api\NoteApiController;
use Illuminate\Support\Facades\Route;

Route::prefix('notes')->name('notes.')->group(function () {
    Route::get('/', [NoteApiController::class, 'index'])->name('index');
    Route::get('/trash', [NoteApiController::class, 'trash'])->name('trash');
    Route::get('/stats', [NoteApiController::class, 'stats'])->name('stats');
    Route::post('/{id}/restore', [NoteApiController::class, 'restore'])->name('restore');
    Route::post('/', [NoteApiController::class, 'store'])->name('store');
    Route::get('/search', [NoteApiController::class, 'search'])->name('search');
    Route::get('{id}', [NoteApiController::class, 'show'])->name('show');
    Route::put('{id}', [NoteApiController::class, 'update'])->name('update');
    Route::delete('{id}', [NoteApiController::class, 'destroy'])->name('destroy');
    Route::delete('/', [NoteApiController::class, 'destroyMultiples'])->name('destroyMultiples');
    Route::delete('/{id}/force', [NoteApiController::class, 'force'])->name('force');
});
