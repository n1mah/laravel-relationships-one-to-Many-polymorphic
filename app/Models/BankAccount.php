<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BankAccount extends Model
{
    protected $fillable=[
        'cart_number',
        'account_number',
        'bank_name',
    ];
}
