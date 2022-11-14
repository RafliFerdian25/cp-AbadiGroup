<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Routes admin
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');
Route::get('/admin/profile', [ProfileController::class, 'edit'])->middleware('auth');
Route::put('/admin/profile/{profile:id}', [ProfileController::class, 'update'])->middleware('auth');
Route::resource('/admin/service', ServiceController::class)->middleware('auth');
Route::resource('/admin/category', CategoryController::class)->middleware('auth');
Route::resource('/admin/product', ProductController::class)->middleware('auth');
Route::resource('/admin/news', NewsController::class)->middleware('auth');
Route::resource('/admin/testimonial', TestimonialController::class)->middleware('auth');

// routes navigasi user
Route::get('/', [ProfileController::class, 'index']);
Route::get('/service', [ServiceController::class, 'userLayanan']);
Route::get('/product', [ProductController::class, 'userProduct']);
Route::get('/product/{category:id}', [ProductController::class, 'userProduct']);
Route::get('/news', [NewsController::class, 'userNews']);
Route::get('/news/{id}', [NewsController::class, 'detailNews']);


Route::get('/gallery', [GalleryController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/testimonial', [ProfileController::class, 'index']);