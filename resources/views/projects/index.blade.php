<!DOCTYPE html>
<html>
<head>
    <title>Projects</title>
</head>
<body>
    <h1>Project List</h1>

@foreach ($projects as $project)
    <h2>{{ $project->name }}</h2>
    <p>{{ $project->description }}</p>
@endforeach
    <a href="{{ route('projects.create') }}">Create New Project</a>
</body>
</html>

{{-- <form method="GET" action="{{ route('projects.search') }}">
    <input type="text" name="query" placeholder="Search Projects">
    <button type="submit">Search</button>
</form> --}}