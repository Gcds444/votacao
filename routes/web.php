<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EnqueteController;
use App\Http\Controllers\VotoController;

Route::get('/', [EnqueteController::class,'index']);
Route::resource('/enquetes', EnqueteController::class);

Route::resource('/votos', VotoController::class);
Route::patch('/votos/{voto}', [VotoController::class,'somar']);