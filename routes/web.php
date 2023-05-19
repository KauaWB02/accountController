<?php

use App\Http\Controllers\accountController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\itemController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\searchController;
use App\Http\Controllers\usersController;
use Illuminate\Support\Facades\Route;

Route::get('/', [homeController::class, 'index'])->name('home-index')->middleware('chack.login');
Route::post('/search', [searchController::class, 'search']);


Route::prefix('/login')->group(function () {
  Route::get('/', [loginController::class, 'index'])->name('login-index');
  Route::post('/', [loginController::class, 'store'])->name('login-store');
  Route::post('/loggout', [loginController::class, 'loggout'])->name('login-loggout');
});

Route::middleware(['chack.login', 'chack.admin'])->prefix('/users')->group(function () {
  Route::get('/', [usersController::class, 'index'])->name('user-index');
  Route::get('/create', [usersController::class, 'create'])->name('user-create');
  Route::post('/', [usersController::class, 'store'])->name('user-store');
  Route::get('/{id}/edit', [usersController::class, 'edit'])->name('user-edit');
  Route::put('/{id}', [usersController::class, 'update'])->name('user-update');
  Route::delete('/{id}', [usersController::class, 'destroy'])->name('user-destroy');
});

Route::middleware(['chack.login'])->prefix('/account')->group(function () {
  Route::get('/create', [accountController::class, 'create'])->name('account-create');
  Route::post('/', [accountController::class, 'store'])->name('account-store');
  Route::get('/{id}/edit', [accountController::class, 'edit'])->name('account-edit');
  Route::put('/{id}', [accountController::class, 'update'])->name('account-update');
  Route::delete('/{id}', [accountController::class, 'destroy'])->name('account-destroy');
});




Route::middleware(['chack.login'])->prefix('/account/item')->group(function () {
  Route::post('/create/{id}', [itemController::class, 'store'])->name('item-store');
  Route::get('/edit/{id}', [itemController::class, 'edit'])->name('item-edit');
  Route::put('/{id}', [itemController::class, 'update'])->name('item-update');
  Route::delete('/{id}', [itemController::class, 'destroy'])->name('item-destroy');

});