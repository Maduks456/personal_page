<x-layout>
    <x-slot:title>
        Create A Project
    </x-slot:title>
    <form action="/projects/" method="POST" enctype="multipart/form-data">
        @csrf
        <label>
            Title:
            <input type="text" name="title" value="{{old('title')}}"required>
        </label>
        <label>
            Status:
            <select name="status"required>
                <option value="not_started" {{ old('status') == 'not_started' ? 'selected' : ''}}>Not Started</option>
                <option value="in_progress" {{ old('status') == 'in_progress' ? 'selected' : ''}}>In Progress</option>
                <option value="done" {{ old('status') == 'done' ? 'selected' : ''}}>Done</option>
            </select>
        </label>
        <label>
            Description:
            <textarea name="description" rows="5" cols="40" required >{{ old('description') }}</textarea>
        </label>
        <label>
            Github Link:
            <input type="text" name="github_link" value="{{old('github_link')}}">
        </label>
        <label>
            Image:
            <input type="file" name="image" >
        </label>
        <button>
            Create
        </button>
    </form>
</x-layout>