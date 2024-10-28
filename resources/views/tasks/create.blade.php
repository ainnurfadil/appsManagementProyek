<form method="POST" action="{{ route('tasks.store', ['projectId' => $projectId]) }}">
    @csrf
    <input type="text" name="name" placeholder="Task Name">
    <textarea name="description" placeholder="Task Description"></textarea>
    <select name="status_id">
        @foreach ($statuses as $status)
            <option value="{{ $status->id }}">{{ $status->name }}</option>
        @endforeach
    </select>
    <button type="submit">Create Task</button>
</form>