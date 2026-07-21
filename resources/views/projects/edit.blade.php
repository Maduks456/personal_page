<x-layout>
    <x-slot:title>
        Edit {{$project->title}} Project
    </x-slot:title>
     <div class="main">
        <div class="main_title">
            <h1>Edit {{$project->title}} Project</h1>
        </div>
        <div class="short_hor-line"></div>
         <form action="/projects/{{$project->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <div class="main_box_row">
                <div class="create_main">
                    <div>
                        @error("title")
                            <p>{{ $message }}</p><br>
                        @enderror
                        <label>
                            Title:<br>
                            <input type="text" name="title" value="{{old('title', $project->title)}}">
                        </label>
                    </div>
                    <div>
                        @error("status")
                            <p>{{ $message }}</p><br>
                        @enderror
                        <label>
                            Status:<br>
                            <select name="status">
                                <option value="not_started" {{ old('status', $project->status) == 'not_started' ? 'selected' : ''}}>Not Started</option>
                                <option value="in_progress" {{ old('status', $project->status) == 'in_progress' ? 'selected' : ''}}>In Progress</option>
                                <option value="done" {{ old('status', $project->status) == 'done' ? 'selected' : ''}}>Done</option>
                            </select>
                        </label>
                    </div>
                    <div>
                         @error("description")
                            <p>{{ $message }}</p><br>
                        @enderror
                        <label>
                            Description:<br>
                            <textarea name="description" rows="3" cols="40" >{{ old('description', $project->description) }}</textarea>
                        </label>
                    </div>
                    <div>
                        @error("github_link")
                            <p>{{ $message }}</p><br>
                        @enderror
                        <label>
                            Github Link:<br>
                             <input type="text" name="github_link" value="{{old('github_link', $project->github_link)}}">
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
                            Save
                        </button>
                   </div>
                </div>
                <div class="create_tags">
                    <label>
                        Tags (max of 3)
                    </label>
                        @foreach($tags as $tag)
                            <label>
                                <input type="checkbox" name="tags[]" value="{{$tag->id}}" {{ in_array($tag->id, old('tags', $project->tags->pluck('id')->toArray())) ? 'checked' : '' }}>
                                {{$tag->name}}
                            </label>
                        @endforeach
                </div>
                @if($project->image)
                    <div class="show_box_img">
                        <img src="{{ asset('storage/' . $project->image) }}" width="430" height="220" alt="{{ $project->title }}">
                    </div>
                @endif
            </div>    
        </form>
    </div>
</x-layout>
