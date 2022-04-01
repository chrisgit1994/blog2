<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> 

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>

    <body>
        <div class="container mx-auto">
            <x-alert color="blue" class="mb-4">
                <x-slot name="title">
                    Titulo 1
                </x-slot>
                Hola mundo!
            </x-alert>
            <x-alert color="orange">
                <x-slot name="title">
                    Titulo 2
                </x-slot>
                Hola mundo2!
            </x-alert>
        </div>
    </body>
</html>
