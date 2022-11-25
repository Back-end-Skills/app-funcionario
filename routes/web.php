<?php

    use App\Http\Controllers\FuncionarioController;
    use Illuminate\Support\Facades\Route;


    Route::get('/', [FuncionarioController::class, 'index']);

    Route::get('/create', [FuncionarioController::class, 'create']);
    Route::post('/store', [FuncionarioController::class, 'store']);

    Route::get('/edit/{id}', [FuncionarioController::class, 'edit']);
    Route::put('/update/{id}', [FuncionarioController::class, 'update']);

    Route::delete('/{id}', [FuncionarioController::class, 'destroy']);
