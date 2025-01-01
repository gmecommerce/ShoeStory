<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'ShoeStory') }}</title>
        <link rel="shortcut icon"  href="{{ Vite::asset("/public/images/logo.png") }}">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center bg-background-default-dark">
            <div class="w-full overflow-hidden sm:rounded-lg ">
                {{ $slot }}
            </div>
        </div>
        @include('layouts.partials.footer')
    </body>
</html>