<x-layout>
    <x-slot:title>
        Create A Project
    </x-slot:title>
    <div class="main">
        <div class="main_title">
            <h1>Create A Project</h1>
        </div>
        <div class="short_hor-line"></div>
        <form action="/projects/" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="main_box_row">
                <div class="create_main">
                    <div>
                        @error("title")
                            <p>{{ $message }}</p><br>
                        @enderror
                        <label>
                            Title:<br>
                            <input type="text" name="title" value="{{old('title')}}"required>
                        </label>
                    </div>
                    <div>
                        @error("status")
                            <p>{{ $message }}</p><br>
                        @enderror
                        <label>
                            Status:<br>
                            <select name="status"required>
                                <option value="not_started" {{ old('status') == 'not_started' ? 'selected' : ''}}>Not Started</option>
                                <option value="in_progress" {{ old('status') == 'in_progress' ? 'selected' : ''}}>In Progress</option>
                                <option value="done" {{ old('status') == 'done' ? 'selected' : ''}}>Done</option>
                            </select>
                        </label>
                    </div>
                    <div>
                         @error("description")
                            <p>{{ $message }}</p><br>
                        @enderror
                        <label>
                            Description:<br>
                            <textarea name="description" rows="5" cols="40" required >{{ old('description') }}</textarea>
                        </label>
                    </div>
                    <div>
                        @error("github_link")
                            <p>{{ $message }}</p><br>
                        @enderror
                        <label>
                            Github Link:<br>
                            <input type="text" name="github_link" value="{{old('github_link')}}">
                        </label>
                    </div>
                    <div>
                        @error("image")
                            <p>{{ $message }}</p><br>
                        @enderror
                        <label>
                            Image:<br>
                            <input type="file" name="image" class="white">
                        </label>
                    </div>
                    <div>
                        <button>
                            Create
                        </button>
                   </div>
                </div>
                <div class="create_tags">
                    <label>
                        Tags (max of 3)
                    </label>
                        @foreach($tags as $tag)
                            <label>
                                <input type="checkbox" name="tags[]" value="{{$tag->id}}" {{ in_array($tag->id, old('tags', [])) ?'checked' : ''}}>
                                {{$tag->name}}
                            </label>
                        @endforeach
                </div> 
            </div>    
        </form>
    </div>
   
</x-layout>