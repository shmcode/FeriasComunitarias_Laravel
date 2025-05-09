<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeriaController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('ferias', FeriaController::class);
