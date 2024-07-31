@extends('layout.app')

@section('title', 'ToDo List')
@section('header', 'ToDo List')

@section('content')
    @include('task.form')
    @include('task.table')
    <div class="text-center mt-[20px]">
        {{ $tasks->links() }}
    </div>
    @include('task.insert')
@endsection