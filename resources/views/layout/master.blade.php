<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/writers.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/article.css') }}">
    <link rel="stylesheet" href="{{ asset('css/popular.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aboutUs.css') }}">
    <title>Document</title>
</head>
<body>
    <div>
        @include('layout.header')

        @yield('content')
        
        @include('layout.footer')
    </div>
</body>
</html>