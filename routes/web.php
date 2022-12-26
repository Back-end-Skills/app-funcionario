<?php

    use App\Http\Controllers\FuncionarioController;
    use Illuminate\Support\Facades\Route;


    Route::get('/', [FuncionarioController::class, 'index']);

    Route::get('/funcionarios/create', [FuncionarioController::class, 'create']);
    Route::post('/store', [FuncionarioController::class, 'store']);

    Route::get('/edit/{id}', [FuncionarioController::class, 'edit']);
    Route::put('/update/{id}', [FuncionarioController::class, 'update']);

    Route::delete('/funcionarios/{id}', [FuncionarioController::class, 'destroy']);

    Route::get('/show/{id}', [FuncionarioController::class, 'show']);

