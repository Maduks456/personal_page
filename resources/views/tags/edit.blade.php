<x-layout>
    <x-slot:title>
        {{$tag->name}} Edit
    </x-slot:title>
    <div class="main">
        <div class="main_title">
            <h1>Create A Tag</h1>
        </div>
        <div class="short_hor-line"></div>
        <form action="/tags/{{$tag->id}}" method="POST">
            @csrf
            @method("PUT")
            <div class="main_box_row">
                <div class="create_tag">
                    <div>
                        @error('name')
                            <p>{{ $message}}</p>
                        @enderror
                        <label>
                            Tag Name:
                             <input type="text" name="name" value="{{old('name', $tag->name)}}">
                        </label>
                    </div>
                    <div>
                        <button>
                            Save
                        </button>
                   </div>
                </div>
            </div>    
        </form>
    </div>
</x-layout>