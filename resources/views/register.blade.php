<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP ATM</title>

        <link href="{{URL::asset('css/phpatm.css');}}" rel="stylesheet">

    </head>
    <body class="antialiased">
        <div class="auth-page">
            <h1 class="title">PHP<br> ATM</h1>
            
            <h2>Register</h2>

            <form class="register">
                <label for="user">User</label>
                <x-input type="text" name="user" id="user"></x-input>

                <label for="email">Email</label>
                <x-input type="text" name="email" id="email"></x-input>

                <label for="password">Password</label>
                <x-input type="text" name="password" id="password"></x-input>
                <x-button value="Register"></x-button>
            </form>
        </div>
    </body>
</html>



