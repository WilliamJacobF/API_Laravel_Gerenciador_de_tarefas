<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\tarefa;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    public function index(){
        $tarefas = tarefa::all();
        return view('tarefas.index', ['tarefas'=>$tarefas]);
    }
    public function create(){
        return view('tarefas.create');
    }
    public function store(Request $request){
        tarefa::create($request->all());
        return redirect()->route('tarefas-index');
    }
    public function edit($id){
        $tarefas = tarefa::where('id',$id)->first();
        if(!empty($tarefas)){
            return view('tarefas.edit', ['tarefas'=>$tarefas]);
        } else {
            return redirect()->route('tarefas-index');
        }
    }
    public function update(Request $request, $id){
        $data = [
            'tarefa' => $request->tarefa,
            'prazo' => $request->prazo,
        ];
        tarefa::where('id',$id)->update($data);
        return redirect()->route('tarefas-index');
    }
    public function destroy($id){
        tarefa::where('id',$id)->delete();
        return redirect()->route('tarefas-index');
    }
}
