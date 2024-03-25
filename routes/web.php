<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/create/note', [NoteController::class, 'index'])->name('create');
    Route::post('/store/note', [NoteController::class, 'store'])->name('note.store');
    Route::get('/note/list', [NoteController::class, 'list'])->name('note.list');
    Route::get('/edit/note/{id}', [NoteController::class, 'edit'])->name('edit.note');
    Route::post('/update/note', [NoteController::class, 'update'])->name('update.note');
    Route::get('/destroy/note/{id}', [NoteController::class, 'destroy'])->name('destroy.note');
    Route::post('/notes/search', [NoteController::class, 'search'])->name('notes.search');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';