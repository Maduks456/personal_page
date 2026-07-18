<x-layout>
    <form action="login" method="POST">
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