@extends('layouts.tasks')

@section('title','Редактирование группы')

@section('content' )
<!--форма front--> 

@include('tasks.form', ['action'=>route('tasks.update',$task->id),'method'=>'put'])


@endsection