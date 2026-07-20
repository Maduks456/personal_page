<x-layout>
    <div class="main">
        <div class="main_title">
                <h1>Login</h1>     
        </div>
        <div class="short_hor-line"></div>
        <div class="main_box_column">
            <div class="main_box_side_box">
                <form action="login" method="POST">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        {{ $error }}
                    @endforeach
                @endif 
                <label for="email">
                    Email:
                </label>
                
                <input type="email" name="email" value="{{old('email')}}" id="email" required><br>
                <label for="password">
                    Password:
                </label>
                <input type="password" name="password" id="password"required><br>
                <button>Login</button>
            </form>
            </div>
        </div>
    </div>
    
</x-layout>