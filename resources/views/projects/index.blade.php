<x-layout>
    <x-slot:title>
        Projects
    </x-slot:title>
    @if ($projects->isEmpty())
        <p>Sorry but I havent thought about any project ideas</p>
    @endif
    @foreach($projects as $project)
        <div>
            {{$project->title}}
        </div>
        <div>
            {{ ucwords(str_replace('_', ' ', $project->status)) }}
        </div>
        <div>
            <a href="/projects/{{$project->id}}">See more</a>
        </div>
    @endforeach
</x-layout>