<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Project Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />



    </head>
    <body class="antialiased">

        <h1>Hello Word, welcome to first project laravel</h1>
        <p>My name is {{ $name }} </p>
        <hr/>
        <p>I have {{ $idade }} years old</p>
        <hr/>
        <p>I am developer {{ $office }}</p>
        <hr/>
        <br/>
        <h1>Just one "if"</h1>
        @if($name == 'Samuel')
            <p>My 'if' is correct, return {{ $name }}</p>
        @else
            <p>My 'if' is not correct, no return the expected</p>
        @endif
    </body>
</html>
