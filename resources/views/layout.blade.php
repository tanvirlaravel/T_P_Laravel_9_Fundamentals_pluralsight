<!DOCTYPE html>
<html>
    <head>
        <title>
            @yield('title', 'Blog')
        </title>
    </head>
    <body>

        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
        </ul>

        <div  class="main">
            @yield('content')
        </div>
    </body>
</html>
