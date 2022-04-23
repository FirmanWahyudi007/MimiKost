<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mimi Kost | Home</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @yield('header')
</head>

<body>

    @include('components.navigation')

    @yield('body')

    @yield('script')
    
</body>

</html>