<?php

use App\Http\Controllers\Shop\CartController;
use App\Http\Controllers\Shop\MainController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[MainController::class,'index'])->name('homepage');

Route::get('/produit',[MainController::class,'produit']);

Route::get('/produit/{id}',[MainController::class,'produit'])->name('voir_produit');

Route::get('/categorie/{id}',[MainController::class,'viewByCategory'])->name('voir_produits_par_cat');

Route::get('/tag/{id}',[MainController::class,'viewByTag'])->name('voir_produits_par_tag');

Route::post('/panier/add/{id}',[CartController::class,'add'])->name('cart_add');
Route::get('/panier',[CartController::class,'index'])->name('cart_index');
