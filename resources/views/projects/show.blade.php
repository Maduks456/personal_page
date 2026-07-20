<x-layout>
    <x-slot:title>
        {{$project->title}} Info
    </x-slot:title>
    <div class="main">
        <div class="main_title">
            <h1>{{$project->title}} Info</h1>
        </div>
        <div class="short_hor-line"></div>
        <div class="main_box_column">
            <div class="show_box">
                <div class="show_box_main">
                    <div class="show_box_top">
                        <div>
                            <b>Project:</b> <br>{{$project->title}}
                        </div>
                        <div>
                            <b>Status:</b> <br>{{ ucwords(str_replace('_', ' ', $project->status)) }}
                        </div>
                    </div>
                    <div class="show_box_mid">
                        <div>
                            <b>About the project:</b><br> {{$project->description}}
                        </div>
                        <div>
                            @if($project->github_link)
                                <a href="{{$project->github_link}}">GitHub repository</a>
                            @endif
                        </div>
                    </div>
                    <div class="show_box_bot">
                        @auth
                            <div>
                                <a href="{{$project->id}}/edit">
                                    <button>
                                        Edit
                                    </button>
                                </a>
                            </div>
                            <div>
                                <form action="{{$project->id}}/delete" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <button>
                                        Delete
                                    </button>
                                </form>
                            </div>
                        @endauth
                    </div>
                </div>
                @if($project->tags)
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
                @endif
                @if($project->image)
                    <div class="show_box_img">
                        <img src="{{ asset('storage/' . $project->image) }}" width="430" height="220" alt="{{ $project->title }}">
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-layout>