@extends('layouts.app')

@section('title', 'Edit Task')

@section('styles')
    <style>
        .error-message {
            color: red;
            font-size: 0.8rem;
        }
    </style>
@endsection

@section('content')
    <form method="POST" action="{{ route('tasks.update', ['task' => $task->id]) }}">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Title</label>
            <input id="title" name="title" value="{{ $task->title }}" text="text" />
            @error('title')
                <P class="error-message">{{ $message }}</P>
            @enderror
        </div>
        <div>
            <label for="description">Description</label>
            <textarea id="description" name="description" rows="5">
                {{ $task->description }}</textarea>
            @error('description')
                <P class="error-message">{{ $message }}</P>
            @enderror
        </div>
        <div>
            <label for="long_description">Long Description</label>
            <textarea id="long_description" name="long_description" rows="10">
                {{ $task->long_description }}</textarea>
            @error('long_description')
                <P class="error-message">{{ $message }}</P>
            @enderror
        </div>

        <button type="submit">Edit Task</button>
    </form>
@endsection
