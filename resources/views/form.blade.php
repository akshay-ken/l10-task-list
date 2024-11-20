@extends('layouts.app')

@section('title', isset($task) ? 'Edit Task' : 'Add Task')


@section('content')
    <form method="POST" action="{{ isset($task) ? route('tasks.update', ['task' => $task->id]) : route('tasks.store') }}">
        @csrf
        @isset($task)
            @method('PUT')
        @endisset
        <div class="mb-4">
            <label for="title">Title</label>
            <input id="title" name="title" value="{{ $task->title ?? old('title') }}" @class(['border-red-500' => $errors->has('title')])
                text="text" />
            @error('title')
                <P class="error">{{ $message }}</P>
            @enderror
        </div>
        <div class="mb-4">
            <label for="description">Description</label>
            <textarea id="description" name="description" rows="5" @class(['border-red-500' => $errors->has('description')])>
                {{ $task->description ?? old('description') }}</textarea>
            @error('description')
                <P class="error">{{ $message }}</P>
            @enderror
        </div>
        <div class="mb-4">
            <label for="long_description">Long Description</label>
            <textarea id="long_description" name="long_description" rows="10" @class(['border-red-500' => $errors->has('long_description')])>
                {{ $task->long_description ?? old('long_description') }}</textarea>
            @error('long_description')
                <P class="error">{{ $message }}</P>
            @enderror
        </div>
        <div class="flex items-center gap-2">
            <button class="rounded-md px-2 py-1 text-center font-medium shadow-md ring-1 ring-gray-800 hover:bg-blue-400"
                type="submit">
                @isset($task)
                    Update Task
                @else
                    Add Task
                @endisset
            </button>
            <a class="link" href="{{ route('tasks.index') }}">Cancel</a>
        </div>
    </form>
@endsection
