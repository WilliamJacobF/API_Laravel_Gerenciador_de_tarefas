<?php

use Illuminate\Http\Request;
use App\Http\Controllers\TarefaController;
use Illuminate\Support\Facades\Route;

Route::get('/index', [TarefaController::class, 'index'])->name('tarefas-index');
Route::get('/create', [TarefaController::class, 'create'])->name('tarefas-create');
Route::post('/', [TarefaController::class, 'store'])->name('tarefas-store');
Route::get('/{id}/edit', [TarefaController::class, 'edit'])->where('id', '[0-9]+')->name('tarefas-edit');
Route::put('/{id}', [TarefaController::class, 'update'])->where('id', '[0-9]+')->name('tarefas-update');
Route::delete('/{id}', [TarefaController::class, 'destroy'])->where('id', '[0-9]+')->name('tarefas-destroy');
