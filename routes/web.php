<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductsController::class, 'home'])->name('produtos-index');
Route::get('/create',[ProductsController::class, 'create'])->name('produtos-create');
Route::post('/',[ProductsController::class, 'insert'])->name('produtos-insert');
Route::get('{id}/edit',[ProductsController::class, 'edit'])->where('id', '[0-9]+')->name('produtos-edit');
Route::put('{id}', [ProductsController::class, 'update'])->where('id', '[0-9]+')->name('produtos-update');
Route::delete('{id}', [ProductsController::class, 'destroy'])->where('id', '[0-9]+')->name('produtos-destroy');
