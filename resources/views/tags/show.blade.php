<x-layout>
    <x-slot:title>
        Tag: {{$tag->name}}
    </x-slot:title>
    Tag: {{$tag->name}}
    <a href="/tags/{{$tag->id}}/edit">Edit</a>
    <form action="/tags" method="POST">
        @csrf
        @method("DELETE")
        <Button>
            Delete
        </Button>
    </form>
</x-layout>