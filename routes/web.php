<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResturantItemsController;
use App\Http\Controllers\UserOrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

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
    return view('welcome');
});
Route::get('/authtest',function(){
    return '<h1>You are logged in!</h1>';
})->middleware('auth.basic');

Route::resource('categories',CategoryController::class)->middleware('auth');
Route::resource('items',ResturantItemsController::class)->middleware('auth');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/home',[UserOrderController::class, 'index'])->name('home');
Route::post('/home', [UserOrderController::class, 'add_to_cart'])->name('home.add_to_cart');
require __DIR__.'/auth.php';
