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

            <h2>Login</h2>

            <form class="login">
                <label for="user">User</label>
                <x-input type="text" name="user" id="user"></x-input>

                <div class="grip-container">
                    <div class="item-1"><label for="password">Password</label></div>
                    <div class="item-2"><a href="https://www.youtube.com/watch?v=BbeeuzU5Qc8&t=1s">Forgot password?</a></div>
                </div>
                <x-input type="text" name="password" id="password"></x-input>
                <x-button value="Login"></x-button>
            </form>
        </div>
    </body>
</html>

