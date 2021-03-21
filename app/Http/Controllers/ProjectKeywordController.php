<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKeywordRequest;
use App\Models\Project;
use App\Models\ProjectKeyword;
use Illuminate\Http\Request;

class ProjectKeywordController extends Controller
{
    public function index(Project $project)
    {
        //
    }

    public function create(Project $project)
    {
        return view('projects.keywords.create', compact('project'));
    }

    public function store(Project $project, StoreKeywordRequest $request)
    {
        ProjectKeyword::create(
            $request->validated() +
            [
                'project_id' => $project->id,
                'repeat_fact' => 0
            ]
        );

        return redirect()->route('projects.show', $project)->withSuccess('Keyword added succesfully');
    }

    public function show(Project $project, ProjectKeyword $keyword)
    {
        //
    }

    public function edit(Project $project, ProjectKeyword $keyword)
    {
        return view('projects.keywords.edit', compact('project', 'keyword'));
    }

    public function update(Project $project, StoreKeywordRequest $request, ProjectKeyword $keyword)
    {
        $keyword->update($request->validated());

        return redirect()->route('projects.show', $project)->withSuccess('Keyword updated succesfully');
    }

    public function destroy(Project $project, ProjectKeyword $keyword)
    {
        $keyword->delete();

        return redirect()->route('projects.show', $project)->withSuccess('Keyword deleted succesfully');
    }
}
