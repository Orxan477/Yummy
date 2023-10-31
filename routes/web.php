<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Back\AdminController;
use App\Http\Controllers\Back\AuthController;

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
    return view('index');
});
// Route::get('/admin', function () {
//     return view('back/index');
// });

Route::get('/admin', [AdminController::class, "index"])->name('index');
Route::get('/admin/login', [AuthController::class, "login"])->name('login');
Route::get('/admin/register', [AuthController::class, "register"])->name('register');
Route::post('/admin/register', [AuthController::class, "registerPost"])->name('registerPost');