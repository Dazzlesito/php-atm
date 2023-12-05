<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP ATM</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;700;900&display=swap" rel="stylesheet">

    </head>

    <style>
        * {
            font-family: 'Montserrat', sans-serif;
            color: #131240;
        }

        ::selection {
            color: white;
            background-color: #32D9D9;
        }
    </style>

    <body style="background-color: #F2F2F2; margin: 0.5rem;" class="antialiased">
        <x-square>
            <x-title size="4rem"></x-title>
            <x-form button="Login" action="Login">
                <x-input type="text" id="user" label="User"></x-input>

                <x-input type="password" id="password" label="Password"></x-input>
            </x-form>
            <a href="https://www.youtube.com/watch?v=BbeeuzU5Qc8&t=1s" style="">Forgot password?</a>
        </x-square>
    </body>
</html>

