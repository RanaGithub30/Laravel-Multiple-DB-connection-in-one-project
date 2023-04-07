<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MultipleDatabaseHandleController;

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
    return view('welcome');
});

Route::get('user-list', [MultipleDatabaseHandleController::class, 'user_list'])->name('user-list');
Route::get('change-db-connection/{db}', [MultipleDatabaseHandleController::class, 'change_db_connection'])->name('change-db-connection');