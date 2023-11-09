<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Back\AdminController;
use App\Http\Controllers\Back\AuthController;
use App\Http\Controllers\Back\HeroController;
use App\Http\Controllers\Back\StatisticController;
use App\Http\Controllers\Back\GalleryController;
use App\Http\Controllers\Back\AboutController;
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
    Route::get('/admin/hero/detail/{id}', [HeroController::class, 'detail'])->name('product.detail');
    Route::get('/admin/hero/update/{id}', [HeroController::class, 'update'])->name('product.update');
    Route::post('/admin/hero/update', [HeroController::class, 'update_post'])->name('product.update_post');
    Route::get('/admin/hero/delete/{id}', [HeroController::class, 'delete'])->name('product.delete');

    Route::get('/admin/about', [AboutController::class, 'index'])->name('about');
    Route::get('/admin/about/detail', [AboutController::class, 'detail'])->name('about.detail');
    Route::get('/admin/about/update/{id}', [AboutController::class, 'update'])->name('about.update');
    Route::post('/admin/about/update', [AboutController::class, 'update_post'])->name('about.update_post');

    Route::get('/admin/why', [WhyController::class, 'index'])->name('why');

    Route::get('/admin/statistic', [StatisticController::class, 'index'])->name('statistic');
    Route::get('/admin/statistic/update', [StatisticController::class, 'update'])->name('statistic.update');
    Route::post('/admin/statistic/update', [StatisticController::class, 'update_post'])->name('statistic.update_post');

    Route::get('/admin/menu', [MenuController::class, 'index'])->name('menu');

    Route::get('/admin/faq', [FAQController::class, 'index'])->name('faq');

    Route::get('/admin/event', [EventController::class, 'index'])->name('event');

    Route::get('/admin/chef', [FAQController::class, 'index'])->name('chef');

    Route::get('/admin/reservation', [ReservationController::class, 'index'])->name('reservation');

    Route::get('/admin/gallery', [GalleryController::class, 'index'])->name('gallery');
    Route::get('/admin/gallery/create', [GalleryController::class, 'create'])->name('create_gallery');
    Route::post('/admin/gallery/create', [GalleryController::class, 'create_post'])->name('create_gallery_post');
    Route::get('/admin/gallery/update/{id}', [GalleryController::class, 'update'])->name('gallery.update');
    Route::post('/admin/gallery/update', [GalleryController::class, 'update_post'])->name('gallery.update_post');
    Route::get('/admin/gallery/delete/{id}', [GalleryController::class, 'delete'])->name('gallery.delete');


    Route::get('/admin/contactus', [ContactUsController::class, 'index'])->name('contact_us');

    Route::get('/admin/setting', [SettingController::class, 'index'])->name('setting');

});

Route::group(['middleware' => 'login.check'], function () {
    Route::get('/admin/login', [AuthController::class, "login"])->name('login');
    Route::post('/admin/login', [AuthController::class, "loginPost"])->name('loginPost');
});

