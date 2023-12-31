<?php

use App\Http\Controllers\CustomerController;
use App\Models\Customer;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('customers/create', [CustomerController::class, 'create']);
Route::get('customers', [CustomerController::class, 'index'])->name('customers.index');
Route::post('customers', [CustomerController::class, 'store']);
Route::delete('customers/{customerId}', [CustomerController::class, 'destroy']);
Route::get('customers/{customer}/edit', [CustomerController::class, 'edit']);
Route::put('customers/{customer}', [CustomerController::class, 'update']);
Route::get('customers/{customer}/detail', [CustomerController::class, 'show']);
