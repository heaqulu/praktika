@extends('layouts.tasks')

@section('title','Группы')

@section('content')
{{ $group->name }}



<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Имя челика</th>
      <th scope="col">Управление челиком</th>
    </tr>
  </thead>
  <tbody>
  @foreach($group->students as $student)
    <tr>
        <th scope="row">{{ $student->id }}</th>
        <td>{{ $student->name }}</td>
        <td>{{ $group->leader }}</td>
        <td>
            <a href="{{ route('tasks.show', $group->id) }}">
                <button type="button" class="btn btn-primary">Это хто?</button>
            </a>
        <button type="button" class="btn btn-danger">Отчислить!</button>
        </td>
      
    </tr>
    @endforeach

@endsection