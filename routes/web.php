<?php

use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/main', [MainController::class, 'getMain']);


Route::get('products.combo', [ProductController::class, 'getCombo']);
Route::get('products.branded', [ProductController::class, 'getBranded']);
Route::get('products.baked', [ProductController::class, 'getBaked']);
Route::get('products.cold', [ProductController::class, 'getCold']);
Route::get('products.tempura', [ProductController::class, 'getTempura']);
Route::get('products.sets', [ProductController::class, 'getSets']);
Route::get('products.pizza', [ProductController::class, 'getPizza']);
Route::get('products.snacks', [ProductController::class, 'getSnacks']);
Route::get('products.beverages', [ProductController::class, 'getBeverages']);
Route::get('products.udon', [ProductController::class, 'getUdon']);
Route::get('products.childrenSets', [ProductController::class, 'getChildrenSets']);
Route::get('products.additional', [ProductController::class, 'getAdditional']);
Route::get('products.classic', [ProductController::class, 'getClassic']);
Route::get('products.sushi', [ProductController::class, 'getSushi']);
Route::get('products.burgers', [ProductController::class, 'getBurgers']);


Route::get('dashboard', [CustomAuthController::class, 'dashboard'])->name('dashboard');
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('register', [CustomAuthController::class, 'registration'])->name('register');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');


Route::get('/admin/login');
Route::get('/admin/products', [App\Http\Controllers\Admin\ProductController::class, 'getProducts'])->name('admin.products');
Route::get('/admin/main', [App\Http\Controllers\Admin\MainController::class, 'index'])->name('admin.main');


