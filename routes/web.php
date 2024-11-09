<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/products',[ProductController::class,'index'])->name('view');
Route::get('/products/create',[ProductController::class,'create'])->name('create');
Route::post('/products',[ProductController::class,'store'])->name('store');
Route::get('/products/{id}',[ProductController::class,'show'])->name('show');
Route::get('/products/{id}/edit',[ProductController::class,'edit'])->name('edit');
Route::put('/products/{id}',[ProductController::class,'update'])->name('update');
Route::delete('/products/{id}',[ProductController::class,'destroy'])->name('delete');
