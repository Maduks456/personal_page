<x-layout>
    <x-slot:title>
        {{$tag->name}} Edit
    </x-slot:title>
    <form action="/tags/{{$tag->id}}" method="POST">
        @csrf
        @method("PUT")
        @error('name')
            <p>{{ $message}}</p>
        @enderror
        <label> 
            Tag Name:
            <input type="text" name="name" value="{{old('name', $tag->name)}}">
        </label>
        <button>
            Save Changes
        </button>
    </form>
</x-layout>