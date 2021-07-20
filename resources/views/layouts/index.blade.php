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
 <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('page1') }}">Welcome</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link {{request()->is('view1')?'active':''}}" href="{{ route('page1') }}">View1</a>
                        <a class="nav-link {{request()->is('view2')?'active':''}}" href="{{ route('page2') }}">View2</a>
                        <a class="nav-link {{request()->is('view3')?'active':''}}" href="{{ route('page3') }}">View3</a>
                        {{-- <a class="nav-link {{request()->is('viewX')?'active':''}}" href="{{ route('routeX') }}">ViewX</a> --}}
                    </div>
                </div>
            </div>
        </nav>
    </header>

@yield('content')

<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
