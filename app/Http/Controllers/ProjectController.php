<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        $project = new Project($request->all());
        $project->save();
        return redirect()->route('projects.index');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $projects = Project::where('name', 'LIKE', "%$query%")
                        ->orWhere('created_at', 'LIKE', "%$query%")
                        ->get();
        return view('projects.index', compact('projects'));
    }
}
