<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmprendedorController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('emprendedores', EmprendedorController::class);