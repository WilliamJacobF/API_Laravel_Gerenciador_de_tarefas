@extends('layout.main')

@section('content')
<h1>Lista de tarefas</h1>
<hr>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tarefa</th>
      <th scope="col">prazo</th>
  </thead>
  <tbody>
@foreach($clientes as $cliente)
    <tr>
        <th>{{ $tarefa->id }}</th>
        <td>{{ $tarefa->tarefa }}</td>
        <td>{{ $tarefa->prazo }}</td>
        <td class="d-flex"><a href="{{ route('tarefas-edit', ['id'=>$tarefas->id]) }}" class="btn btn-primary">editar</a>
            <form action="{{ route('tarefas-destroy', ['id'=>$tarefas->id]) }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">deletar</button>
            </form>
        </td>
    </tr>
@endforeach
  </tbody>
</table>
<a href="{{ route('tarefas-create') }}" class="btn btn-primary">Nova tarefa</a>

@endsection