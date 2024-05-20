<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomersController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/customers/create', [CustomersController::class, 'create'])->name('customers.create');
Route::post('/customers', [CustomersController::class, 'store'])->name('customers.store');
Route::post('/customers', [CustomersController::class, 'destroy'])->name('customers.destroy');

Route::resource('customers', \App\Http\Controllers\CustomersController::class);
Route::resource('kamar',\App\Http\Controllers\KamarController::class);
Route::delete('/akun/{id}', 'AkunController@destroy')->name('akun.destroy');
Route::get('/akun/{id}', 'AkunController@show')->name('akun.show');
Route::get('/akun/{id}/edit', 'AkunController@edit')->name('akun.edit');

