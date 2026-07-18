<x-layout>
    <x-slot:title>
        Create A Tag
    </x-slot:title>
    <form action="/tags" method="POST">
        @error('name')
            <p>{{ $message}}</p>
        @enderror
        <label>
            Tag Name:
            <input type="text" name="name" value="{{old('name')}}">
        </label>
        <button>
            Create
        </button>
    </form>
</x-layout>