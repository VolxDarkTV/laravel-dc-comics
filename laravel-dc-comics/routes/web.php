<?php

use Illuminate\Support\Facades\Route;
// Controller
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'personHome'])
    -> name('person.Home');

// --- Show
Route::get('/person/show{person}', [MainController::class, 'personShow'])
    -> name('person.Show');

// Create
Route::get('/person/create', [MainController::class, 'personCreate'])
    -> name('person.Create');

// Store
Route::post('/person/store', [MainController::class, 'personStore'])
    -> name('person.Store');

// Delete
Route::get('/person/delete{person}', [MainController::class, 'personDelete'])
    -> name('person.Delete');
