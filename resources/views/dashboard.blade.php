<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel App</title>

</head>

<body>
    @include('partials.nav')

    <h1>Dashboard</h1>
    
    @include('partials.messages')

</body>

</html>
