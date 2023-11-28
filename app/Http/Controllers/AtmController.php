<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AtmController extends Controller
{
    public function render() {
        return view("atm", ['balance' => "1'000.000"]);
    }
}
