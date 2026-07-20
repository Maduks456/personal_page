<x-layout>
    <x-slot:title>
        Create A Tag
    </x-slot:title>
    <div class="main">
        <div class="main_title">
            <h1>Create A Tag</h1>
        </div>
        <div class="short_hor-line"></div>
       <form action="/tags" method="POST">
            @csrf
            <div class="main_box_row">
                <div class="create_tag">
                    <div>
                        @error('name')
                            <p>{{ $message}}</p>
                        @enderror
                        <label>
                            Tag Name:
                            <input type="text" name="name" value="{{old('name')}}">
                        </label>
                    </div>
                    <div>
                        <button>
                            Create
                        </button>
                   </div>
                </div>
            </div>    
        </form>
    </div>
    
       
        
    
</x-layout>