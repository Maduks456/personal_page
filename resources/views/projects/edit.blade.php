<x-layout>
    <x-slot:title>
        Edit {{$project->title}} Project
    </x-slot:title>
    <form action="/projects/{{$project->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method("PUT")
        <label>
            Title:
            <input type="text" name="title" value="{{old('title', $project->title)}}">
        </label>
        <label>
            Status:
            <select name="status">
                <option value="not_started" {{ old('status', $project->status) == 'not_started' ? 'selected' : ''}}>Not Started</option>
                <option value="in_progress" {{ old('status', $project->status) == 'in_progress' ? 'selected' : ''}}>In Progress</option>
                <option value="done" {{ old('status', $project->status) == 'done' ? 'selected' : ''}}>Done</option>
            </select>
        </label>
        <label>
            Description:
            <textarea name="description" rows="3" cols="40" >{{ old('description', $project->description) }}</textarea>
        </label>
        <label>
            Github Link:
            <input type="text" name="github_link" value="{{old('github_link', $project->github_link)}}">
        </label>
        <label>
            Image:
            <input type="file" name="image">
        </label>
        <button>
            Save
        </button>
    </form>
</x-layout>