<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            这是一个主要的侧边栏
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>

