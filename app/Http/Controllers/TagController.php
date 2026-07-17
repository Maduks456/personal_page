<?php

namespace App\Http\Controllers;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index(){
        $tags = Tag::all();
        return view('tags.index', compact("tags"));
    }

    public function show(Tag $tag){
        return view('tags.show', compact("tag"));
    }

    public function create()
    {
        return view('tags.create');
    }

    public function store()
    {

    }

    public function edit()
    {
        return view('tags.edit');
    }

    public function update()
    {

    }
    
    public function destroy()
    {

    }
}
