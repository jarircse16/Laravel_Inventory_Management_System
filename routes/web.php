<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\LoginController;



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
//Route::middleware(['auth'])->group(function () {
    // Routes inside this group are now protected by the 'auth' middleware

Route::get('/', [ProductController::class, 'index'])->name('products.index');


Route::get('/login', [LoginController::class, 'showLoginForm']);

Route::resource('products', ProductController::class);

// Display all products
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

// Show the form for creating a new product
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');

// Store a newly created product in the database
Route::post('/products', [ProductController::class, 'store'])->name('products.store');

// Display the specified product
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');

// Show the form for editing the specified product
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');

// Update the specified product in the database
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');

// Remove the specified product from the database
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//});
// In routes/web.php
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
