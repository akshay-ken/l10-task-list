@extends('layouts.app')

@section('title', $task->title)

@section('content')
    <div class="mb-4">
        <a class="font-medium text-gray-700 underline decoration-pink-500" href="{{ route('tasks.index') }}">
            <- Go Back To Home Page</a>
    </div>

    <p class="mb-4 text-blue-600">{{ $task->description }}</p>

    @if ($task->long_description)
        <p class="mb-4 text-blue-400">{{ $task->long_description }}</p>
    @endif

    <p class="mb-4 text-sm text-gray-500">
        Created {{ $task->created_at->diffForHumans() }}
        -- Updated {{ $task->updated_at->diffForHumans() }}</p>

    <P class="mb-4">
        @if ($task->completed)
            <span class="font-medium text-green-500">Completed</span>
        @else
            <span class="font-medium text-red-400">Not Completed</span>
        @endif
    </P>

    <div class="flex gap-2">
        <a class="rounded-md px-2 py-1 text-center font-medium shadow-md ring-1 ring-gray-800 hover:bg-blue-400"
            href="{{ route('tasks.edit', ['task' => $task]) }}">
            Edit</a>

        <form action="{{ route('tasks.toggle-complete', ['task' => $task]) }}" method="POST">
            @csrf
            @method('PUT')

            <button class="rounded-md px-2 py-1 text-center font-medium shadow-md ring-1 ring-gray-800 hover:bg-green-400"
                type="submit">
                Mark as {{ $task->completed ? 'not completed' : 'completed' }}
            </button>

        </form>

        <form action="{{ route('tasks.destory', ['task' => $task]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="rounded-md px-2 py-1 text-center font-medium shadow-md ring-1 ring-gray-800 hover:bg-red-400"
                type="submit">Delete!</button>
        </form>
    </div>
@endsection
