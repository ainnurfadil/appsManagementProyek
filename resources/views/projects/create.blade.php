<form method="POST" action="{{ route('projects.store') }}">
    @csrf
    <input type="text" name="name" placeholder="Project Name">
    <textarea name="description" placeholder="Project Description"></textarea>
    <button type="submit">Create Project</button>
</form>