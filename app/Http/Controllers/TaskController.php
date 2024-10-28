<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;
use App\Models\Task;

class TaskController extends Controller
{
    public function create($projectId)
    {
        $statuses = Status::all();
        return view('tasks.create', compact('statuses', 'projectId'));
    }
    
    public function store(Request $request, $projectId)
    {
        $task = new Task($request->all());
        $task->project_id = $projectId;
        $task->save();
        return redirect()->route('projects.show', $projectId);
    }
}

