<!DOCTYPE html>
<html>
    <head>
        <title>
            @yield('title', 'Blog')
        </title>
    </head>
    <body>

        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
        </ul>

        <div  class="main">
            @yield('content')
        </div>
    </body>
</html>
