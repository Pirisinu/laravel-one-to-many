<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Technology;
use Illuminate\Http\Request;

class TechnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $technologies = Technology::paginate(10);
        return view('admin.technologies.index', compact('technologies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.technologies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $form_data = $request->all();

        $new_technology = new Technology();
        $new_technology->fill($form_data);
        $new_technology->save();

        return redirect()->route('admin.technology.show', $new_technology->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Technology $technology)
    {
        $next = Technology::where('id', '>', $technology->id)->first();
        $prev = Technology::where('id', '<', $technology->id)->orderBy('id', 'desc')->first();
        return view('admin.technologies.show', compact('technology', 'next', 'prev'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $technologyToEdit = Technology::find($id);

        if (!$technologyToEdit) {
            return redirect()
                ->route('admin.technology.index')
                ->with('error', 'Technology not found.');
        }

        return view('admin.technologies.edit', compact('technologyToEdit'));
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
            'name' => 'required',
            'description' => 'required'
        ]);

        $technologyToUpdate = Technology::find($id);

        if (!$technologyToUpdate) {
            return redirect()
                ->route('admin.technology.index')
                ->with('error', 'Technology not found.');
        }

        $technologyToUpdate->update([
            'name' => $request->input('name'),
            'description' => $request->input('description')
        ]);

        $technologyToUpdate->save();

        return redirect()
            ->route('admin.technology.show', ['technology' => $technologyToUpdate->id])
            ->with('success', 'Project aggiornato con successo.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Technology $technology)
    {
        if (!$technology) {
            return redirect()->route('admin.technology.index')->with('error', 'Technology not found.');
        }
        $technology->delete();
        return redirect()->route('admin.technology.index')->with('success', 'Technology successfully deleted.');
    }
}
