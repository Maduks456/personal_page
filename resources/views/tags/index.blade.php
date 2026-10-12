<x-layout>
    <x-slot:title>
        Tags
    </x-slot:title>
    <div class="main">
        <div class="main_title">
            <h1>Tags</h1>
        </div>
        <div class="short_hor-line"></div>
            <div>
                <form action="/tags" method="GET">
                    <input type="text"
                    name="search_tag"
                    value="{{ $search }}"
                    placeholder="Search tags"
                    >
                    <Button type="submit">Search</Button>
                    @if($search)
                        <a href="/tags">Clear</a>
                    @endif

                </form>
            </div>
        <div class="main_box_row">
            
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
                @empty
                    <div class="donthave">
                        @if($search)
                            <p>No tags found for "{{ $search }}"</p>
                        @else
                            <p>Sorry but there arent any tags created for now</p>
                        @endif
                    </div>
                @endforeach
        </div>
    </div>
    
</x-layout>