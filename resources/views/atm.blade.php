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
        <x-title size="7rem"></x-title>

        <x-current-balance>${{ $balance }}</x-current-balance>

        <x-actions action="Move your money">
            <x-form button="Withdraw" class="withdraw">
                <x-input type="number" id="wmoney" label="Withdraw money" placeholder="e.g. 250.000"></x-input>
            </x-form>

            <x-form button="Deposit" class="deposit">
                <x-input type="number" id="dmoney" label="Deposit money" placeholder="e.g. 1'000.000"></x-input>
            </x-form>
        </x-actions>
    </body>
</html>



