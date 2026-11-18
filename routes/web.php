<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BoxesController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// Ruta principal con su nombre 'home'
Route::get('/', [HomeController::class, 'index'])->name('home');

// Rutas de Boxes
Route::get('/boxes', [BoxesController::class, 'index'])->name('boxes.index');
Route::get('/boxes/{id}', [BoxesController::class, 'show'])->whereNumber('id')->name('boxes.show');

// Rutas Públicas del Blog
Route::get('/blog', [PostController::class, 'index'])->name('posts.index');
Route::get('/blog/{slug}', [PostController::class, 'show'])->name('posts.show');

// Panel Admin: ABM del Blog
Route::get('/admin/blog', [PostController::class, 'adminIndex'])->name('admin.posts.index');
Route::get('/admin/blog/crear', [PostController::class, 'create'])->name('admin.posts.create');
Route::post('/admin/blog/crear', [PostController::class, 'store'])->name('admin.posts.store');
Route::get('/admin/blog/{id}/editar', [PostController::class, 'edit'])->whereNumber('id')->name('admin.posts.edit');
Route::put('/admin/blog/{id}/editar', [PostController::class, 'update'])->whereNumber('id')->name('admin.posts.update');
Route::delete('/admin/blog/{id}/eliminar', [PostController::class, 'destroy'])->whereNumber('id')->name('admin.posts.destroy');