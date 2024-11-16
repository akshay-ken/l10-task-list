@extends('layouts.app')

@section('title')
    Tasks!
@endsection

@section('content')
    {{-- @if (count($tasks)) --}}
    @forelse ($tasks as $task)
        <div>
            <a href="{{ route('tasks.show', ['task' => $task->id]) }}">{{ $task->title }}</a>
        </div>
    @empty
        <div>No Tasks!</div>
    @endforelse
    {{-- @endif --}}
@endsection
