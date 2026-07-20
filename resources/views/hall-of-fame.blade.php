<x-layout>
    <x-slot:title>
        Hall Of Fame
    </x-slot:title>
    <div class="main">
        <div class="main_title">
            <h1>Hall Of Fame (aka all done projects)</h1>
        </div>
        @if($projects->isEmpty())
            <div class="short_hor-line"></div>
        @endif
        <div class="main_box_column">
            @foreach($projects as $project)
                <div class="short_hor-line"></div>
                
                    @if($loop->even)
                        <div class="main_hall">
                            @if($project->image)
                                <div class="hall_img">
                                    <img src="{{ asset('storage/' . $project->image) }}" width="480" height="260" alt="{{ $project->title }}">
                                </div>
                            @else
                                <div class="hall_no_img">
                                    <h1>The project didnt have a image</h1>
                                </div>
                            @endif
                            <div class="hall_box">
                                <div class="box_top">
                                    <div>
                                        <h1>Project: <br>
                                        {{$project->title}}</h1>
                                    </div>
                                    <div class="show_box_tags">
                                        <div class="show_box_tags_title">
                                            Tags:
                                        </div>
                                            @foreach ($project->tags as $tag)
                                                <div class="show_box_tag">
                                                    {{$tag->name}}
                                                </div>
                                            @endforeach
                                    </div>
                                </div>
                                <div class="box_mid">
                                    Discription:<br>
                                    {{$project->description}}
                                </div>
                                <div>
                                    @if($project->github_link)
                                        <a href="{{$project->github_link}}">GitHub repository</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="main_hall">
                            <div class="hall_box">
                                <div class="box_top">
                                    <div>
                                        <h1>Project: <br>
                                        {{$project->title}}</h1>
                                    </div>
                                    <div class="show_box_tags">
                                        <div class="show_box_tags_title">
                                            Tags:
                                        </div>
                                            @foreach ($project->tags as $tag)
                                                <div class="show_box_tag">
                                                    {{$tag->name}}
                                                </div>
                                            @endforeach
                                    </div>
                                </div>
                                <div class="box_mid">
                                    Discription:<br>
                                    {{$project->description}}
                                </div>
                                <div>
                                    @if($project->github_link)
                                        <a href="{{$project->github_link}}">GitHub repository</a>
                                    @endif
                                </div>
                            </div>
                            @if($project->image)
                                <div class="hall_img">
                                    <img src="{{ asset('storage/' . $project->image) }}" width="480" height="260" alt="{{ $project->title }}">
                                </div>
                            @else
                                <div class="hall_no_img">
                                    <h1>The project didnt have a image</h1>
                                </div>
                            @endif
                        </div>
                    @endif
            @endforeach
        </div>
    </div>
</x-layout>