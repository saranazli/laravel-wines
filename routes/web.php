<?php

use App\Http\Controllers\Guest\PageController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PageController::class,'index'])->name('home');

Route::get('/wines', [PageController::class, 'wines'])->name('wines');
