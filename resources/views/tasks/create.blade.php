@extends('layouts.tasks')

@section('title','Группы')

@section('content' )
<!--форма front--> 

@include('tasks.form', ['action'=>route('tasks.store'),'method'=>'post'])



@endsection