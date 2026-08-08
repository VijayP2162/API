<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Register\Masterregister;

use App\Http\Controllers\Login\Loginmaster;

Route::get('/', function () {
    return view('login');
});

Route ::get('/admin_register',[Loginmaster::class,'admin_register'])->name('admin_register');

Route ::get('/dasboard',[Dashboard::class,'dasboard'])->name('dasboard');

Route::get('/master_register',[Masterregister::class,'master_register'])->name('master_register');





