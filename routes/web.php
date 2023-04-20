<?php

use App\Http\Controllers\categoriasController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\productsController;
use App\Http\Controllers\usersController;
use Illuminate\Support\Facades\Route;

Route::get('/', [homeController::class, 'index'])->name('home-index')->middleware('chack.login');

Route::prefix('/login')->group(function () {
  Route::get('/', [loginController::class, 'index'])->name('login-index');
  Route::post('/', [loginController::class, 'store'])->name('login-store');
  Route::post('/loggout', [loginController::class, 'loggout'])->name('login-loggout');
});


Route::middleware(['chack.login'])->prefix('/products')->group(function () {
  Route::get('/', [productsController::class, 'index'])->name('product-index');
  Route::get('/create', [productsController::class, 'create'])->name('product-create');
  Route::get('/{id}/edit', [productsController::class, 'edit'])->name('product-edit');
  Route::post('/', [productsController::class, 'store'])->name('product-store');
  Route::put('/{id}', [productsController::class, 'update'])->name('product-update');
  Route::delete('/{id}', [productsController::class, 'destroy'])->name('product-destroy');
});

Route::middleware(['chack.login', 'chack.admin'])->prefix('/users')->group(function () {
  Route::get('/', [usersController::class, 'index'])->name('user-index');
  Route::get('/create', [usersController::class, 'create'])->name('user-create');
  Route::post('/', [usersController::class, 'store'])->name('user-store');
  Route::get('/{id}/edit', [usersController::class, 'edit'])->name('user-edit');
  Route::put('/{id}', [usersController::class, 'update'])->name('user-update');
  Route::delete('/{id}', [usersController::class, 'destroy'])->name('user-destroy');

});


Route::middleware(['chack.login'])->prefix('/categoria')->group(function () {
  Route::get('/', [categoriasController::class, 'index'])->name('categoria-index');
  Route::get('/create', [categoriasController::class, 'create'])->name('categoria-create');
  Route::get('/{id}/edit', [categoriasController::class, 'edit'])->name('categoria-edit');
  Route::put('/{id}', [categoriasController::class, 'update'])->name('categoria-update');
  Route::post('/', [categoriasController::class, 'store'])->name('categoria-store');
  Route::delete('/{id}', [categoriasController::class, 'destroy'])->name('categoria-destroy');
});