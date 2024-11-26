<?php

use Illuminate\Http\Request;
use App\Http\Controllers\TarefaController;
use Illuminate\Support\Facades\Route;

Route::apiResource('tarefa', 'api\TarefaController');
