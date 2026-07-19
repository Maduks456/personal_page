<x-layout>
    <x-slot:title>
        Hall Of Fame
    </x-slot:title>
    <h1>Hall Of Fame (aka all done projects)</h1>
    @foreach($projects as $project)
        @if($loop->even)
            1 {{$project->title}}
            {{$project->description}}
            {{$project->github_link}}
            @if($project->image)
            <img src="{{ asset('storage/' . $project->image) }}" width="400" height="200" alt="{{ $project->title }}">
            @endif
            @Foreach($project->tags as $tag)
                {{$tag->name}}
            @endforeach
        @else
            2 {{$project->title}}
            {{$project->description}}
            {{$project->github_link}}
            @if($project->image)
            <img src="{{ asset('storage/' . $project->image) }}" width="400" height="200" alt="{{ $project->title }}">
            @endif
            @Foreach($project->tags as $tag)
                {{$tag->name}}
            @endforeach
        @endif

    @endforeach
</x-layout>