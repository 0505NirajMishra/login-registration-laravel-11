<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Logincontroller;
use App\Http\Controllers\Registrationcontroller;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[Logincontroller::class,'getLogin'])->name('login');
Route::post('/login',[Logincontroller::class,'Login'])->name('loginpost');

Route::get('/register',[Registrationcontroller::class,'getRegister'])->name('regsiter');
Route::post('/registerpost',[Registrationcontroller::class,'Register'])->name('registerpost');


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [Logincontroller::class, 'Dashboard'])->name('dashboard');
    Route::resource('employees', EmployeeController::class)->names([
        'index' => 'employees.index',
        'create' => 'employees.create',
        'store' => 'employees.store',
        'edit' => 'employees.edit',
        'update' => 'employees.update',
        'destroy' => 'employees.destroy',
    ]);;
    Route::get('/demopage', [Logincontroller::class, 'DemoPage'])->name('demopage');
    Route::get('/logout', [Logincontroller::class, 'logout'])->name('logout');
});

