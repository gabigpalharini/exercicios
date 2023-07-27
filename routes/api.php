<?php

use App\Http\Controllers\ExerciciocincoController;
use App\Http\Controllers\ExercicioDoisController;
use App\Http\Controllers\ExerciciodozeController;
use App\Http\Controllers\ExercicioquatroController;
use App\Http\Controllers\ExercicioSeteController;
use App\Http\Controllers\ExerciciotresoController;
use App\Http\Controllers\ExercicioUmController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('exercicio/um', 
[ExercicioUmController::class, 'multiplicar']);

Route::post('exercicio/dois', 
[ExercicioDoisController::class, 'retornarMaior']);

Route::get('exercicio/sete', 
[ExercicioSeteController::class, 'exibirNumeros']);

Route::post('exercicio/quatro', 
[ExercicioquatroController::class, 'verificarNumero']);

Route::post('exercicio/tres', 
[ExerciciotresoController::class, 'mediaAritimetica']);

Route::post('exercicio/cinco', 
[ExerciciocincoController::class, 'divisivel']);

Route::get ('exercicio/doze', 
[ExerciciodozeController::class, 'mostrarNumeros']);
