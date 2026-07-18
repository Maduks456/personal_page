<x-layout>
    <x-slot:title>
        Edit {{$project->title}} Project
    </x-slot:title>
    <form action="/projects/{{$project->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method("PUT")
        @error("title")
            <p>{{ $message }}</p><br>
        @enderror
        <label>
            Title:
            <input type="text" name="title" value="{{old('title', $project->title)}}">
        </label>
        @error("status")
            <p>{{ $message }}</p><br>
        @enderror
        <label>
            Status:
            <select name="status">
                <option value="not_started" {{ old('status', $project->status) == 'not_started' ? 'selected' : ''}}>Not Started</option>
                <option value="in_progress" {{ old('status', $project->status) == 'in_progress' ? 'selected' : ''}}>In Progress</option>
                <option value="done" {{ old('status', $project->status) == 'done' ? 'selected' : ''}}>Done</option>
            </select>
        </label>
        @error("description")
            <p>{{ $message }}</p><br>
        @enderror
        <label>
            Description:
            <textarea name="description" rows="3" cols="40" >{{ old('description', $project->description) }}</textarea>
        </label>
        @error("github_link")
            <p>{{ $message }}</p><br>
        @enderror
        <label>
            Github Link:
            <input type="text" name="github_link" value="{{old('github_link', $project->github_link)}}">
        </label>
        @error("image")
            <p>{{ $message }}</p><br>
        @enderror
        <label>
            Image:
            <input type="file" name="image">
        </label>
        @if($project->image)
            <img src="{{ asset('storage/' . $project->image) }}" width="400" height="200" alt="{{ $project->title }}">
        @endif
        <label>
            Tags (max 3)
         </label>
            @foreach($tags as $tag)
                <label>
                    <input type="checkbox" name="tags[]" value="{{$tag->id}}" {{ in_array($tag->id, old('tags', $project->tags->pluck('id')->toArray())) ? 'checked' : '' }}>
                    {{$tag->name}}
                </label>
            @endforeach
        <button>
            Save
        </button>
    </form>
</x-layout>