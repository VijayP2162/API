<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Register\Masterregister;

use App\Http\Controllers\Login\Loginmaster;

Route::get('/', function () {
    return view('login');
});

// Route ::get('/admin_register',[Loginmaster::class,'admin_register'])->name('admin_register');

Route ::get('/dasboard',[Dashboard::class,'dasboard'])->name('dasboard');

Route::get('/master_register',[Masterregister::class,'master_register'])->name('master_register');

Route::post('/register_data',[Masterregister::class,'register_data'])->name('register_data');

Route ::get('/Employee_list',[Masterregister::class,'Employee_list'])->name('Employee_list');

Route::put('/edit_employee_details/{id}',[Masterregister::class,'edit_employee_details'])->name('edit_employee_details'); 





