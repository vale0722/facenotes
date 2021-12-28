<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name') }}</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body class="antialiased h-screen flex flex-col gap-5 bg-gray-50 text-gray-600">
        <div class="bg-gray-100 shadow-lg w-full h-28 flex px-10">
            @svg('icon-logo', 'object-content h-28 w-28 mx-4')
        </div>
        <div class="max-w-3xl mx-auto h-full w-full">
           @yield('content')
        </div>
    </body>
</html>
