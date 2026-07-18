<x-layout>
    <x-slot:title>
        {{$project->title}} Info
    </x-slot:title>
        {{$project->title}}
        {{ ucwords(str_replace('_', ' ', $project->status)) }}
        <a href="{{$project->github_link}}">GitHub repository</a>
        {{$project->description}}
        @if($project->image)
            <img src="{{ asset('storage/' . $project->image) }}" width="400" height="200" alt="{{ $project->title }}">
        @endif
        <a href="{{$project->id}}/edit">edit</a>
        <form action="{{$project->id}}/delete" method="POST">
            @csrf
            @method("DELETE")
            <button>
                Delete
            </button>
        </form>
</x-layout>