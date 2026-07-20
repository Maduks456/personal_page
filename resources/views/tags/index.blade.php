<x-layout>
    <x-slot:title>
        Tags
    </x-slot:title>
    <div class="main">
        <div class="main_title">
            <h1>Tags</h1>
        </div>
        <div class="short_hor-line"></div>
        <div class="main_box_row">
            @if ($tags->isEmpty())
                <div class="donthave">
                    <p>Sorry but there arent any tags created for now</p>
                </div>
            @endif
            @foreach($tags as $tag)
                <div class="tag_box">
                        <div>
                                @auth
                                    <a href="/tags/{{$tag->id}}">{{$tag->name}}</a>
                                @endauth
                                @guest
                                    {{$tag->name}}
                                @endguest
                        </div>
                </div>
            @endforeach
        </div>
    </div>
    
</x-layout>