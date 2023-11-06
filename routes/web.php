<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Back\AdminController;
use App\Http\Controllers\Back\AuthController;
use App\Http\Controllers\Back\HeroController;
use App\Http\Middleware\AuthAccess;

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

Route::group(['middleware' => 'admin.access'], function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('index');
    Route::get('/admin/register', [AuthController::class, "register"])->name('register');
    Route::post('/admin/register', [AuthController::class, "registerPost"])->name('registerPost');

    Route::get('/admin/signout', [AuthController::class, 'signout'])->name('signout');

    Route::get('/admin/dashboard', [HeroController::class, 'index'])->name('dashboard');

    Route::get('/admin/hero', [HeroController::class, 'index'])->name('hero');

    Route::get('/admin/hero/create', [HeroController::class, 'create'])->name('create_hero');
    Route::post('/admin/hero/create', [HeroController::class, 'create_hero_post'])->name('create_hero_post');

    Route::get('/admin/about', [AboutController::class, 'index'])->name('about');

    Route::get('/admin/why', [WhyController::class, 'index'])->name('why');

    Route::get('/admin/statistic', [StatisticController::class, 'index'])->name('statistic');

    Route::get('/admin/faq', [FAQController::class, 'index'])->name('faq');

    Route::get('/admin/event', [EventController::class, 'index'])->name('event');

    Route::get('/admin/chef', [FAQController::class, 'index'])->name('chef');

    Route::get('/admin/reservation', [ReservationController::class, 'index'])->name('reservation');

    Route::get('/admin/gallery', [GalleryController::class, 'index'])->name('gallery');

    Route::get('/admin/contactus', [ContactUsController::class, 'index'])->name('contact_us');

    Route::get('/admin/setting', [SettingController::class, 'index'])->name('setting');

});

Route::group(['middleware' => 'login.check'], function () {
    Route::get('/admin/login', [AuthController::class, "login"])->name('login');
    Route::post('/admin/login', [AuthController::class, "loginPost"])->name('loginPost');
});

