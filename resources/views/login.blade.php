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

    <form method="POST">
        @csrf
        <label for="email">
            <input name="email" type="email" id="email" placeholder="Email">
        </label>
        <label for="password">
            <input name="password" type="password" id="password" placeholder="Password">
        </label>
        <label for="remember">
            Remember me
            <input name="remember" type="checkbox" id="remember">
        </label>
        <button type="submit">Login</button>
    </form>

</body>

</html>
