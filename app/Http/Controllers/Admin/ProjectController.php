<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $project = new Project();
        $project->fill($data);

        // Lo slug viene usato come un id ma è più user friendly, inserisce i trattini tra le parole, è utile per le pagine CEO friendly
        $project->slug = Str::slug($project->title);
        $project->save();

        $projects = Project::all();
        return view('admin.projects.index', ['success' => 'Progetto inserito', 'projects' => $projects]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {

        // dd($project);
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('admin.projects.index')->with('message', 'Progetto ' . $project->title . ' eliminato');
    }
}
