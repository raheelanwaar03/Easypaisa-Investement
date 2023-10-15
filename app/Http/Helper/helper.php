<?php

use App\Models\User\Wallet;

function wallet_balance()
{
    $balance = Wallet::where('user_id',auth()->user()->id)->first();
    if($balance == null)
    {
        $wallet_balance = 0;
    }
    else{
        $wallet_balance = $balance->wallet;
    }
    return $wallet_balance;
}
