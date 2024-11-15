@extends('layouts.app')

@section('title', 'Add Task')

@section('content')
    {{ $errors }}
    <form method="POST" action="{{ route('tasks.store') }}">
        @csrf
        <div>
            <label for="title">Title</label>
            <input id="title" name="title" text="text" />
        </div>
        <div>
            <label for="description">Description</label>
            <textarea id="description" name="description" rows="5"></textarea>
        </div>
        <div>
            <label for="long_description">Long Description</label>
            <textarea id="long_description" name="long_description" rows="10"></textarea>
        </div>

        <button type="submit">Add Task</button>
    </form>
@endsection
