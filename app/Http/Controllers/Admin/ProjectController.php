<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Technology;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $technology = Technology::all();
        $projects = Project::paginate(10);
        return view('admin.projects.index', compact('projects', 'technology'));
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
        $form_data = $request->all();

        $new_project = new Project();
        $new_project->fill($form_data);
        $new_project->save();

        return redirect()->route('admin.project.show', $new_project->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        $next = Project::where('id', '>', $project->id)->first();
        $prev = Project::where('id', '<', $project->id)->orderBy('id', 'desc')->first();
        return view('admin.projects.show', compact('project', 'next', 'prev'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $projectToEdit = Project::find($id);

        if (!$projectToEdit) {
            return redirect()
                ->route('admin.project.index')
                ->with('error', 'Project not found.');
        }

        return view('admin.projects.edit', compact('projectToEdit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validazione dei dati del modulo
        $request->validate([
            'title' => 'required',
            'start_date' => 'required',
            'description' => 'required'
        ]);

        $project = Project::find($id);

        if (!$project) {
            return redirect()
                ->route('admin.project.index')
                ->with('error', 'Project not found.');
        }

        $project->update([
            'title' => $request->input('title'),
            'start_date' => $request->input('start_date'),
            'description' => $request->input('description')
        ]);

        $project->save();

        return redirect()
            ->route('admin.project.show', ['project' => $project->id])
            ->with('success', 'Project aggiornato con successo.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        if (!$project) {
            return redirect()->route('admin.project.index')->with('error', 'Project not found.');
        }
        $project->delete();
        return redirect()->route('admin.project.index')->with('success', 'Project successfully deleted.');
    }
}


