<?php

use Illuminate\Support\Facades\Route;
// Controller
use App\Http\Controllers\MainController;

Route::get('/', function () {
    return view('welcome');
});
