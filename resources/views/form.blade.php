@extends('layouts.app')

@section('title', isset($task) ? 'Edit Task' : 'Add Task')

@section('styles')
    <style>
        .error-message {
            color: red;
            font-size: 0.8rem;
        }
    </style>
@endsection

@section('content')
    <form method="POST" action="{{ isset($task) ? route('tasks.update', ['task' => $task->id]) : route('tasks.store') }}">
        @csrf
        @isset($task)
            @method('PUT')
        @endisset
        <div>
            <label for="title">Title</label>
            <input id="title" name="title" value="{{ $task->title ?? old('title') }}" text="text" />
            @error('title')
                <P class="error-message">{{ $message }}</P>
            @enderror
        </div>
        <div>
            <label for="description">Description</label>
            <textarea id="description" name="description" rows="5">
                {{ $task->description ?? old('description') }}</textarea>
            @error('description')
                <P class="error-message">{{ $message }}</P>
            @enderror
        </div>
        <div>
            <label for="long_description">Long Description</label>
            <textarea id="long_description" name="long_description" rows="10">
                {{ $task->long_description ?? old('long_description') }}</textarea>
            @error('long_description')
                <P class="error-message">{{ $message }}</P>
            @enderror
        </div>

        <button type="submit">
            @isset($task)
                Update Task
            @else
                Add Task
            @endisset
        </button>
    </form>
@endsection
