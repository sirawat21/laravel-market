<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        @include('c-components.head')
    </head>
    <body> 
        @include('c-components.navbar')
        <div class="container" style="margin-top:10px;">
            @yield('content')
        </div>
    </body>
</html>
