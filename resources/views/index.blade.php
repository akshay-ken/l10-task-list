<h3>
    Tasks!
</h3>

<div>
    {{-- @if (count($tasks)) --}}
    @forelse ($tasks as $task)
        <div>
            <a href="{{ route('tasks.show', ['id' => $task->id]) }}">{{ $task->title }}</a>
        </div>
    @empty
        <div>No Tasks!</div>
    @endforelse
    {{-- @endif --}}
</div>
