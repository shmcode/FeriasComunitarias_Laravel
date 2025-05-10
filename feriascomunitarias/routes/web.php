<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeriaController;
use App\Http\Controllers\EmprendedorController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('ferias', FeriaController::class);
Route::resource('emprendedores', EmprendedorController::class)
    ->parameters(['emprendedores' => 'emprendedor']);