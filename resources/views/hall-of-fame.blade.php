<x-layout>
    <x-slot:title>
        Hall Of Fame
    </x-slot:title>
    <h1>Hall Of Fame (aka all done projects)</h1>
    @foreach($projects as $project)
        @if($loop->even)
            1 {{$project->title}}
        @else
            2 {{$project->title}}
        @endif

    @endforeach
</x-layout>