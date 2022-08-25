<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel App</title>

</head>

<body>

    @include('partials.nav')

    <h1>Login</h1>

    @include('partials.messages')

    {{-- show errors --}}

    {{-- @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif --}}

    <form method="POST">

        @csrf

        <label for="email">
            <input name="email" value="{{ old('email') }}" type="email" id="email" required autofocus placeholder="Email">
        </label>

        @error('email')
            {{ $message }}
        @enderror

        <label for="password">
            <input name="password" type="password" id="password" required placeholder="Password">
        </label>

        @error('password')
            {{ $message }}
        @enderror

        <label for="remember">
            Remember me
            <input name="remember" type="checkbox" id="remember">
        </label>

        <button type="submit">Login</button>
    </form>

</body>

</html>
