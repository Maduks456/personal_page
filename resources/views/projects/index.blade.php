<x-layout>
    <x-slot:title>
        Projects
    </x-slot:title>
    <div class="main">
        <div class="main_title">
            <h1>Projects</h1>
        </div>
        <div class="short_hor-line"></div>
        <div class="main_box_row">
            @if ($projects->isEmpty())
                <div class="donthave">
                    <p>Sorry but I havent thought about any project ideas</p>
                </div>
            @endif
            @foreach($projects as $project)
                <div class="project_box">
                    <div class="project_box_row">
                        <div>
                            Project:<br> {{$project->title}}
                        </div>
                        <div class="left">
                            Tags:<ul>
                                @if($project->tags)
                                    @foreach ($project->tags as $tag)
                                        <li>{{$tag->name}}</li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div>
                        Status:<br> {{ ucwords(str_replace('_', ' ', $project->status)) }}
                    </div>
                    
                    <div>
                        <a href="/projects/{{$project->id}}">See more</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>