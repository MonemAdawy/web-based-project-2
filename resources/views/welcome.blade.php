<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>
        <div class="container">
            <h1>{{__('messages.welcome')}}</h1>
        </div>
        @vite(['resources/css/app.css', 'resources/js/app.js', 'public/js/register-validation.js'])
    </body>
</html>
