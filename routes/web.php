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

//COMPANY
Route::get('/companies', function () {
    return Company::all();
});

Route::get('/company/create', function () {
    return Company::create([
        'name'=>'My company',
    ]);
});
