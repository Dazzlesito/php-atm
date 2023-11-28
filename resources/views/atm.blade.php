<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP ATM</title>

        <link href="{{URL::asset('css/phpatm.css');}}" rel="stylesheet">

    </head>
    <body class="antialiased">
        <h1 class="title">PHP<br> ATM</h1>
        
        <div class="current">
            <label for="balance">Current balance</label>
            <span class="balance" id="balance">
                ${{$balance}}
            </span>
        </div>
        
        <div class="actions">
            <form class="withdraw">
                <label for="wmoney">Withdraw money</label>
                <x-input type="number" name="wmoney" id="wmoney" placeholder="e.g. 250.000"></x-input>
                <x-button value="Withdraw"></x-button>
            </form>

            <form class="deposit">
                <label for="dmoney">Deposit money</label>
                <x-input type="number" name="dmoney" id="dmoney" placeholder="e.g. 1'000.000"></x-input>
                <x-button value="Deposit"></x-button>
            </form>
        </div>
    </body>
</html>



