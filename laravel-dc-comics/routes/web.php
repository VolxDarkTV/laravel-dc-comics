<?php

use Illuminate\Support\Facades\Route;
// Controller
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'personHome'])
    -> name('personHome');

// --- Show
Route::get('/person/show{person}', [MainController::class, 'personShow'])
    -> name('personShow');
