<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ThreadController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/theads/create',[ThreadController::class,'create']);
Route::post('threads{thread}',[ThreadController::class,'show']);
    
Route::post('/store-thread', 'ThreadController@store')->name('store_thread');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(ThreadController::class)->middleware(['auth'])->group(function(){
    Route::get('/', 'create')->name('create');
    Route::post('/threads', 'store')->name('store');
    Route::get('/threads/create', 'create')->name('create');
    Route::get('/threads/{thread}', 'show')->name('show');
    Route::put('/threads/{thread}', 'update')->name('update');
    Route::delete('/threads/{thread}', 'delete')->name('delete');
    Route::get('/threads/{thread}/edit', 'edit')->name('edit');
});

Route::get('/categories/{category}', [CategoryController::class,'index'])->middleware("auth");

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
