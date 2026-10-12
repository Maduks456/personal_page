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
            @else
                <div>
                    <form action="/tags" method="GET">
                        <input type="text"
                        name="search_tag"
                        placeholder="Search tags">
                        <Button type="submit">Search</Button>
                    </form>
                </div>
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
            @endif
        </div>
    </div>
    
</x-layout>