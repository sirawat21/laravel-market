<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        @include('components.head')
    </head>
    <body> 
        @include('components.navbar')
        <div class="container" style="margin-top:10px;">
            @yield('content')
        </div>
    </body>
</html>
