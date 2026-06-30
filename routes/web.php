<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WorkshopController;

Route::get('/', [WorkshopController::class, 'index']);
Route::get('/workshop', [WorkshopController::class, 'workshop']);
Route::get('/workshop/{id}', [WorkshopController::class, 'show']);

Route::view('/tentang', 'tentang.index');
Route::view('/kontak', 'kontak.index');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::middleware('auth')->group(function () {

    Route::get('/admin', [AdminController::class, 'index']);

    Route::get('/admin/workshop', [AdminController::class, 'workshop']);

    Route::get('/admin/workshop/pdf', [WorkshopController::class, 'exportPdf']);

    Route::get('/admin/workshop/create', [WorkshopController::class, 'create']);
    Route::post('/admin/workshop/store', [WorkshopController::class, 'store']);

    Route::get('/admin/workshop/edit/{id}', [WorkshopController::class, 'edit']);
    Route::post('/admin/workshop/update/{id}', [WorkshopController::class, 'update']);

    Route::delete('/admin/workshop/delete/{id}', [WorkshopController::class, 'destroy']);

    Route::post('/logout', [LoginController::class, 'logout']);

});