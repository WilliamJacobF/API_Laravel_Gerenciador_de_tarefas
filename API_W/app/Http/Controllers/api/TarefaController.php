<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\tarefa;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    public function index(){
        return tarefa::all();
    }
    public function store(Request $request){
        tarefa::create($request->all());
    }
    public function show($id){
        return tarefa::findOrFail($id);
    }
    public function update(Request $request, $id){
        $tarefa = tarefa::findOrFail($id);
        $tarefa->update($request->all());
    }
    public function destroy($id){
        $tarefa = tarefa::findOrFail($id);
        $tarefa->update();
    }
}
