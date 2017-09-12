<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @yield('pre-head')
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset(mix('css/app.css')) }}" />
    @yield('head')
</head>
<body>
@yield('pre-body')

@yield('content')

@yield('post-body')
</body>
</html>
