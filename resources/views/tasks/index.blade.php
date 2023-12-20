@extends('layouts.tasks')

@section('title','Группы')
@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Заметки</th>
    </tr>
  </thead>
  <tbody>
  @foreach($tasks as $task)
    <tr>
        <th scope="row">{{ $task->id }}</th>
        <td>{{ $task->name }}</td>
        <td>
            
        <a href="{{ route('tasks.edit', $task->id) }}">
                <button type="button" class="btn btn-secondary">Редактировать</button>
        </a>
        <form action="{{ route('tasks.destroy', $task->id)}}" method='post'>
              @csrf
              @method("delete")
              <button type="submit" class="btn btn-danger">Удалить</button>
            </form>
        </td>

      
    </tr>
    @endforeach

    
  </tbody>
</table>
<a href="{{ route('tasks.create' ) }}">
                <button type="button" class="btn btn-primary">Create</button>
            </a>
          

@endsection