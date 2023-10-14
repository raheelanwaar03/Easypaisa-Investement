<?php

use App\Models\User\Wallet;

function wallet_balance()
{
    $balance = Wallet::where('user_id',auth()->user()->id)->first();
    return $balance->wallet;
}
