<?php

use App\Http\Controllers\Accounts\AccountController;
use App\Http\Controllers\Alok\MainCon;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Employees\EmployeeController;
use App\Http\Controllers\ProjectApprovals\ProjectApprovalController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

 
Auth::routes();

Route::group(['prefix' => 'v1'], function(){
    Route::get('/distributors', [AccountController::class, 'distributor'])->name('accounts.distributor');
});