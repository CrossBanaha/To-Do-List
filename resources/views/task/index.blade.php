@extends('layout.app')

@section('title', 'ToDo List')
@section('header', 'ToDo List')

@section('content')
    @include('task.form')
    @include('task.table')
@endsection