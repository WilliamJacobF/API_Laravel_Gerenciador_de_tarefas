@extends('layout.main')

@section('content')
<h1>Nova tarefa</h1>
<hr>
<form action="{{ route('tarefa-store') }}" method="POST">
    @csrf
  <div class="mb-3">
    <label for="tarefa" class="form-label">Tarefa</label>
    <input type="text" name="tarefa" class="form-control">
  </div>
  <div class="mb-3">
    <label for="prazo" class="form-label">Prazo</label>
    <input type="text" name="prazo" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Salvar</button>
</form>

@endsection