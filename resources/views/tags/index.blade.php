<x-layout>
    <x-slot:title>
        Tags
    </x-slot:title>
    @if($tags->isEmpty())
        <p>Sorry but there arent any tags created for now</p>
    @endif
    @foreach($tags as $tag)
        @auth
            <a href="/tags/{{$tag->id}}">{{$tag->name}}</a>
        @endauth
        @guest
            {{$tag->name}}
        @endguest
    @endforeach
</x-layout>