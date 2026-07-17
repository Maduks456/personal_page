<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        $projects = Project::all();
        return view('projects.index', compact("projects"));
    }

    public function show(Project $project){
        return view('projects.show', compact("project"));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store()
    {

    }

    public function edit()
    {
        return view('projects.edit');
    }

    public function update()
    {

    }

    public function destroy()
    {

    }
    public function HallOfFame()
    {

    }
}
