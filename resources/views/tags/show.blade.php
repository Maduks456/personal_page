<x-layout>
    <x-slot:title>
        Tag: {{$tag->name}}
    </x-slot:title>
    <div class="main">
        <div class="main_title">
            <h1>Tag: {{$tag->name}}</h1>
        </div>
        <div class="short_hor-line"></div>
            <div class="main_box_row">
                <div class="create_tag">
                    <div>
                            Tag: {{$tag->name}}
                    </div>
                    <div class="tag_button">
                         @auth
                         <div>
                            <a href="/tags/{{$tag->id}}/edit">
                                <button>
                                    Edit
                                </button>
                            </a>
                        </div>
                        <div>
                            <form action="/tags" method="POST">
                                @csrf
                                @method("DELETE")
                                <Button>
                                    Delete
                                </Button>
                            </form>
                        </div>
                            
                        @endauth
                   </div>
                </div>
            </div>    
    </div>
    
   
</x-layout>