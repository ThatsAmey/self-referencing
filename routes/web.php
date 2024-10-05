<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReferenceController;

Route::get('/', [ReferenceController::class, 'index'])->name('reference.index');
Route::post('/store', [ReferenceController::class, 'store'])->name('reference.store');