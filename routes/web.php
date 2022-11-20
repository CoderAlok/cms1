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

Route::get('/', function () {
    // return view('welcome');
    return view('landing');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'accounts'], function () {
    Route::get('/distributors', [AccountController::class, 'distributor'])->name('accounts.distributor');
    Route::get('/distributors/create', [AccountController::class, 'createDistributor'])->name('accounts.distributor.create');
    Route::get('/dealers', [AccountController::class, 'dealer'])->name('accounts.dealer');
    Route::get('/subdealers', [AccountController::class, 'subdealer'])->name('accounts.subdealer');
    Route::get('/fabricators', [AccountController::class, 'fabricator'])->name('accounts.fabricator');
    Route::get('/engineers', [AccountController::class, 'engineer'])->name('accounts.engineer');
    Route::get('/masons', [AccountController::class, 'mason'])->name('accounts.mason');
    Route::get('/petty-contractors', [AccountController::class, 'petty_contractor'])->name('accounts.petty_contractor');
});

Route::group(['prefix' => 'profile'], function () {
    Route::get('/', [HomeController::class, 'indexProfile'])->name('profile.index');
    Route::post('/update', [HomeController::class, 'updateInfo'])->name('profile.update');
});

Route::group(['prefix' => 'approvals', 'namespace' => 'ProjectApprovals'], function () {
    Route::get('/', [ProjectApprovalController::class, 'index'])->name('project.approvals.list');
    Route::get('/list', [ProjectApprovalController::class, 'fetch'])->name('project.approvals.fetch.list');
    Route::get('/create', [ProjectApprovalController::class, 'create'])->name('project.approvals.create');
});

// ---- This are all test routes ----
Route::group(['prefix' => 'test'], function () {
    Route::get('/test1', [App\Http\Controllers\TestCon::class, 'index'])->name('test1');
});
Route::group(['prefix' => 'alok'], function () {
    Route::get('/', [App\Http\Controllers\Alok\MainCon::class, 'get'])->name('alok.get');
    Route::get('test1', [App\Http\Controllers\Alok\MainCon::class, 'show_page1'])->name('alok.show.page');
    Route::post('test1', [App\Http\Controllers\Alok\MainCon::class, 'show_page_create'])->name('alok.show.page.create');
    Route::get('test101', [App\Http\Controllers\Alok\MainCon::class, 'test_page_101'])->name('alok.show.page.test101');
    Route::post('test101', [App\Http\Controllers\Alok\MainCon::class, 'test_page_101_add'])->name('alok.show.page.test101.add');
    Route::get('test102', [App\Http\Controllers\Alok\MainCon::class, 'test_page_102'])->name('alok.show.page.test102');

    Route::post('test103', [App\Http\Controllers\Alok\MainCon::class, 'test_api_103'])->name('alok.test.api.103');

    Route::get('test/collection', [MainCon::class, 'test_collection'])->name('alok.test.api.test.collection');

    Route::group(['prefix' => 'fruits'], function () {
        Route::get('/', [App\Http\Controllers\fruits\fruitsController::class, 'home'])->name('fruits.home');
        Route::get('/contact', [App\Http\Controllers\fruits\fruitsController::class, 'contact'])->name('fruits.contact');
        Route::get('/about', [App\Http\Controllers\fruits\fruitsController::class, 'about'])->name('fruits.about');
    });

    Route::group(['prefix' => 'contact'], function () {
        Route::get('/contact', [App\Http\Controllers\ContactUsFormController::class, 'createForm']);
        Route::post('/contact', [App\Http\Controllers\ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');
    });

});

Route::group(['prefix' => 'employees'], function () {
    Route::get('create', [EmployeeController::class, 'index'])->name('employee.create.view');
    Route::post('create', [EmployeeController::class, 'create'])->name('employee.create');
});
