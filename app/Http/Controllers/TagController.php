<?php

namespace App\Http\Controllers;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index(Request $request){
        $search = $request->input('search_tag');
        if(isset($search)){
            $tags = Tag::where('name','like','%{$search}%')->latest()->get();
        }else{
            $tags = Tag::all()->latest();
        }
        return view('tags.index', compact("tags"));
    }

    public function show(Tag $tag){
        return view('tags.show', compact("tag"));
    }

    public function create()
    {
        return view('tags.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:50'
        ]);
        Tag::create($validated);
        return redirect('/tags');

    }

    public function edit(Tag $tag)
    {
        return view('tags.edit', compact('tag'));
    }

    public function update(Request $request, Tag $tag)
    {
        $validated = $request->validate([
            'name' => 'required|max:50'
        ]);
        $tag->name = $validated['name'];
        $tag->save();
        return redirect('/tags/'. $tag->id);
    }
    
    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect('/tags');
    }
}
