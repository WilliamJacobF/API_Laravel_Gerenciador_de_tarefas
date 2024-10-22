@extends('layout.main')

@section('content')
<h1>Editar tarefa</h1>
<hr>
<form action="{{ route('tarefas-update',['id'=>$tarefas->id]) }}" method="POST">
@csrf
@method('PUT')
  <div class="mb-3">
    <label for="tarefa" class="form-label">Tarefa</label>
    <input type="text" name="tarefa" class="form-control" value="{{ $tarefas->tarefa }}">
  </div>
  <div class="mb-3">
    <label for="prazo" class="form-label">Prazo</label>
    <input type="text" name="prazo" class="form-control" value="{{ $tarefas->prazo }}">
  </div>
  <button type="submit" class="btn btn-primary">Salvar</button>
</form>

@endsection