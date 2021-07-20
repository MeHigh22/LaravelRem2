<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
@include("partials.nav")


@yield('content')
@if (url()->current() == "http://127.0.0.1:8000/view1")
        @include('partials.carousel1')
    @endif

    @if (url()->current() == "http://127.0.0.1:8000/view2")
        @include('partials.carousel2')
    @endif

    @if (url()->current() == "http://127.0.0.1:8000/view3")
        @include('partials.carousel3')
    @endif


@include("partials.footer")
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
