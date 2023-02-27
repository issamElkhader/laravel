<html>
    <head>
        @yield("meta")
        @vite('resources/css/app.css')
    </head>
    <body>
        <div class="w-full sm:w-full lg:w-full font-rubik bg-gray-900 h-auto sm:h-auto lg:h-auto overflow-x-hidden p-1 ">
            @include("header")
            @yield("content")
            @include("footer")
        </div>
    </body>
</html>