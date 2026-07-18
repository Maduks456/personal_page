<x-layout>
    <form action="login" method="POST">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
        @endif
        <label>
            Email:
            <input type="email" name="email" value="{{old('email')}}" required>
        </label>
        <label>
            Password:
            <input type="password" name="password" required>
        </label>
        <button>Login</button>
    </form>
</x-layout>