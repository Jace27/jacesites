@include('includes.preload')
<!doctype html>
<html lang="ru">
<head>
    @include('includes.head')
    <title>@yield('title')</title>
    @yield('head')
</head>
<body>
    @include('includes.header')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-7 col-md-9">
                @yield('content')
            </div>
            <div class="col-sm-5 col-md-3">
                @include('includes.menu')
            </div>
        </div>
    </div>
    @include('includes.afterload')
</body>
</html>
