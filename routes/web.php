<?php

use App\Models\Company;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//USER

Route::get('/users', function () {
    return User::all();
});

Route::get('/user/create', function () {
    return User::create([
        'name'=>'admin',
        'email'=>'admin@gmail.com',
        'password'=>bcrypt('123456')
    ]);
});
Route::get('/user/{user}/bank-account', function (User $user) {
    $user->bankAccount()->create([
        'cart_number' => '62918619'.rand(1,100),
        'account_number' => '123456789'.rand(1,100),
        'bank_name' => 'Meli',
    ]);
    return $user->with('bankAccount')->get();
});
Route::get('/user/{user}/bank-account/get', function (User $user) {
    return $user->bankAccount;
});

//COMPANY
Route::get('/companies', function () {
    return Company::all();
});

Route::get('/company/create', function () {
    return Company::create([
        'name'=>'My company',
    ]);
});

Route::get('/company/{company}/bank-account', function (Company $company) {
    $company->bankAccount()->create([
        'cart_number' => '62918619'.rand(1,100),
        'account_number' => '123456789'.rand(1,100),
        'bank_name' => 'Mellat',
    ]);
    return $company->with('bankAccount')->get();
});
Route::get('/company/{company}/bank-account/get', function (Company $company) {
    return $company->bankAccount;
});
