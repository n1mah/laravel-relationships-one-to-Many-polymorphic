<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable=[
        'name'
    ];

    public function bankAccount()
    {
        return $this->morphMany(BankAccount::class, 'bankable');
    }
}
