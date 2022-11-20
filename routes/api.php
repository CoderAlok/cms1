<?php

use App\Http\Controllers\Employees\EmployeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', 'API\UserController@login');
Route::post('register', 'API\UserController@register');
Route::group(['middleware' => 'auth:api'], function () {
    Route::post('details', 'API\UserController@details');
});

Route::group(['prefix' => 'v1'], function () {
    Route::get('/contact', [App\Http\Controllers\Alok\MainCon::class, 'getContacts']);
    Route::get('/state', [App\Http\Controllers\Api\TestController::class, 'getState']);
    Route::post('/state', [App\Http\Controllers\Api\TestController::class, 'createState']);
    Route::get('/district', [App\Http\Controllers\Api\TestController::class, 'getDistrict']);
    Route::post('/district', [App\Http\Controllers\Api\TestController::class, 'createDistrict']);
    Route::get('/test   ', [App\Http\Controllers\Api\TestController::class, 'test']);
});

Route::group(['prefix' => 'employees'], function () {
    Route::get('/{id?}', [EmployeeController::class, 'list'])->name('employee.create.list');
    Route::post('create', [EmployeeController::class, 'create'])->name('employee.create');
    Route::post('update', [EmployeeController::class, 'update'])->name('employee.update');
    Route::get('delete/{id?}', [EmployeeController::class, 'delete'])->name('employee.delete');
});
