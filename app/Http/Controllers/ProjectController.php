<?php

namespace App\Http\Controllers;
use App\Models\Project;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $tags = Tag::all();
        return view('projects.create', compact('tags'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:100',
            'description' => 'required| max:250',
            'status' => 'required|in:not_started,in_progress,done',
            'github_link' => 'nullable|url',
            'image' => 'nullable|image|max:2048',
            'tags' => 'nullable|array|max:3',
            'tags.*'=> 'exists:tags,id'
        ]);
        if ($request->hasFile('image')){
            $path =$request->file('image')->store('projects', 'public');
            $validated['image']= $path; 
        }
        $tags = $validated['tags'] ?? [];
        unset($validated['tags']);
        $project = Project::create($validated);
        $project->tags()->sync($tags);
        return redirect('/projects');
    }

    public function edit(Project $project)
    {
        $tags = Tag::all();
        return view('projects.edit', compact('project', 'tags'));
    }

    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title' => 'required|max:100',
            'description' => 'required| max:250',
            'status' => 'required|in:not_started,in_progress,done',
            'github_link' => 'nullable|url',
            'image' => 'nullable|image|max:2048',
            'tags' => 'nullable|array|max:3',
            'tags.*'=> 'exists:tags,id'
        ]);
        if ($request->hasFile('image')){
            if($project->image){
                Storage::disk('public')->delete($project->image);
            }
            $path =$request->file('image')->store('projects', 'public');
            $project->image = $path; 

        }
        $project->title = $validated['title'];
        $project->status = $validated['status'];
        $project->description = $validated['description'];
        $project->github_link = $validated['github_link'];
        $project->save();
         $project->tags()->sync($validated['tags'] ?? []);
        return redirect('/projects/'.$project->id);
    }

    public function destroy(Project $project)
    {
        if($project->image){
                Storage::disk('public')->delete($project->image);
        }
        $project->delete();
        return redirect('/projects');
    }
    public function HallOfFame()
    {

    }
}
