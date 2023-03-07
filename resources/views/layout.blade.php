<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Student manager</title>

        @vite('resources/js/app.js')
    </head>

    <body class="bg-gray-200">
        <nav class="p-6 bg-white flex justify-between mb-6">
            <ul class="flex items-center">
                <li class="p-3"> 
                    Student manager 
                </li>
            </ul>
            <ul class="flex items-center">
                <li>
                    <a href="/" class="p-3">Home</a>
                </li>
            </ul>
        </nav>

        <div>
        @yield('content')
        </div>
    </body>

</html>