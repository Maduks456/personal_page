<x-layout>
    <x-slot:title>
        Create A Project
    </x-slot:title>
    <form action="/projects/" method="POST" enctype="multipart/form-data">
        @csrf
        @error("title")
            <p>{{ $message }}</p><br>
        @enderror
        <label>
            Title:
            <input type="text" name="title" value="{{old('title')}}"required>
        </label>
        @error("status")
            <p>{{ $message }}</p><br>
        @enderror
        <label>
            Status:
            <select name="status"required>
                <option value="not_started" {{ old('status') == 'not_started' ? 'selected' : ''}}>Not Started</option>
                <option value="in_progress" {{ old('status') == 'in_progress' ? 'selected' : ''}}>In Progress</option>
                <option value="done" {{ old('status') == 'done' ? 'selected' : ''}}>Done</option>
            </select>
        </label>
        @error("description")
            <p>{{ $message }}</p><br>
        @enderror
        <label>
            Description:
            <textarea name="description" rows="5" cols="40" required >{{ old('description') }}</textarea>
        </label>
        @error("github_link")
            <p>{{ $message }}</p><br>
        @enderror
        <label>
            Github Link:
            <input type="text" name="github_link" value="{{old('github_link')}}">
        </label>
        @error("image")
            <p>{{ $message }}</p><br>
        @enderror
        <label>
            Image:
            <input type="file" name="image" >
        </label>
         <label>
            Tags (max 3)
         </label>
            @foreach($tags as $tag)
                <label>
                    <input type="checkbox" name="tags[]" value="{{$tag->id}}" {{ in_array($tag->id, old('tags', [])) ?'checked' : ''}}>
                    {{$tag->name}}
                </label>
            @endforeach
        <button>
            Create
        </button>
    </form>
</x-layout>