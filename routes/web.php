<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InputsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\SignOutController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UsersController;
use App\Models\Transaction;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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

Route::get('/', [HomeController::class, 'index']);

Route::resource('/login', LoginController::class);

Route::get('/logout', [SignOutController::class, 'index']);

Route::resource('/users', UsersController::class);
Route::resource('/inputs', InputsController::class);
Route::post('/delete/transaction', [TransactionController::class, 'deleteTrans']);
Route::resource('/roles', RolesController::class);
Route::resource('/reports', ReportsController::class);
Route::get('/about', [AboutController::class, 'index']);

Route::get('/convert-to-json', function () {
    return Transaction::paginate(5);
});
