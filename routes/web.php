<?php

use Illuminate\Support\Facades\Route;
use Illuminate\View\View;

use App\Livewire\Register;
use App\Livewire\Login;
use App\Livewire\CreateCustomer;
use App\Livewire\CustomerList;
use App\Livewire\ViewCustomer;
use App\Livewire\EditCustomer;
use App\Livewire\NavBar;



Route::get('/', function () {
    return view('home');
});
Route::middleware('auth')->group(function () { // corrected middleware case and closing
    Route::get('/create-customer', CreateCustomer::class);
    Route::get('/customers', CustomerList::class);
    Route::get('/customers/{customer}', ViewCustomer::class);
    Route::get('/customers/{customer}/edit', EditCustomer::class);
    Route::get('/nav-bar', NavBar::class);
});


Route::get('/register', Register::class);
Route::get('/login', Login::class)->name('login');
