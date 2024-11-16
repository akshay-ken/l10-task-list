@extends('layouts.app')

@section('title', 'Add Task')

@section('styles')
    <style>
        .error-message {
            color: red;
            font-size: 0.8rem;
        }
    </style>
@endsection

@section('content')
    <form method="POST" action="{{ route('tasks.store') }}">
        @csrf
        <div>
            <label for="title">Title</label>
            <input id="title" name="title" value="{{ old('title') }}" text="text" />
            @error('title')
                <P class="error-message">{{ $message }}</P>
            @enderror
        </div>
        <div>
            <label for="description">Description</label>
            <textarea id="description" name="description" rows="5">
                {{ old('description') }}</textarea>
            @error('description')
                <P class="error-message">{{ $message }}</P>
            @enderror
        </div>
        <div>
            <label for="long_description">Long Description</label>
            <textarea id="long_description" name="long_description" rows="10">
                {{ old('long_description') }}</textarea>
            @error('long_description')
                <P class="error-message">{{ $message }}</P>
            @enderror
        </div>

        <button type="submit">Add Task</button>
    </form>
@endsection
