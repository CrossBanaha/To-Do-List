<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/style.css')
        <title>@yield('title', 'ToDo List')</title>
    </head>
    <body class="font-sans m-0 p-0 h-screen grid min-h-screen bg-gradient-to-t from-black to-customPurple">
        <div class="bg-gradient-to-t from-customBlue to-black my-48 mx-auto w-[500px] rounded-[10px]">
            <h1 class="font-sans text-center p-5 m-5 text-white capitalize text-3xl">@yield('header', 'ToDo List')</h1>
            @yield('content')
        </div>
    </body>
</html>