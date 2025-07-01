<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AdminController::class, 'index'])->name('index');
Route::get('/menu/delete/{id}', [AdminController::class, 'deleteMenu'])->name('delete.menu');
Route::get('/add', [AdminController::class, 'addMenu'])->name('add.menu');
Route::post('/create', [AdminController::class, 'createMenu'])->name('create.menu');


// Route::get('/2', [AdminController::class, 'index2'])->name('index2');