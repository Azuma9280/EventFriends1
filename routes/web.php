<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ThreadController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//Route::get('/threads/create',[ThreadController::class,'create']); //リンクをクリックするのはgetメソッド URLに表示される
//Route::post('/show',[ThreadController::class,'show']); //データの送信、更新、削除、変更はpostメソッド

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(ThreadController::class)->middleware(['auth'])->group(function(){
    //Route::get('/', 'create')->name('create');
    Route::post('/threads', 'store')->name('store');
    Route::get('/threads/create', 'create')->name('create');
    Route::get('/threads/{thread}', 'show')->name('show');
});

Route::controller(HomeController::class)->middleware(['auth'])->group(function(){
    Route::get('/home','home')->name('home');
    Route::get('/category/{category}','category')->name('category');
    Route::get('/thread/{thread}','submit')->name('submit');
    Route::get('/','index')->name('thread.index');
});

Route::controller(CategoryController::class)->middleware(['auth'])->group(function(){
    Route::get('/threads/category','category')->name('category');
});

Route::get('/categories/{category}', [CategoryController::class,'index'])->middleware("auth");

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
