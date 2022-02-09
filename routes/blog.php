<?php

use Bolsainmobiliariape\ModuleBlog\Http\Controllers\Dashboard\Blog\IndexController;
use Illuminate\Support\Facades\Route;

Route::as('dashboard.blog.')->middleware(['web', 'auth'])->prefix('/dashboard/blog')->group(function (){
    Route::get('/', [IndexController::class, 'index'])->name('index');
    Route::get('/create', [IndexController::class, 'create'])->name('create');
    Route::get('/edit/{blog}', [IndexController::class, 'edit'])->name('edit');
});
