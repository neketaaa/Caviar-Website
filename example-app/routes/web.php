<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\MapingController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
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
Route::post('/clear_cart', [ CartController::class, 'clearCart']);

Route::get('/basket', [ CartController::class, 'getCart']);

Route::get('/order', [ OrderController::class, 'showOrder']);

Route::post('/proceedOrder', [ OrderController::class, 'proceedOrder']);

Route::post('/cart/{id}', [ CartController::class, 'addToCart' ]);

Route::get('tile/item/{id}', [ MapingController::class, 'item' ]);

Route::get('/tile/{type}', [ MapingController::class, 'tile' ]);


Route::get('/{name}', [ MapingController::class, 'show' ]);

Route::get('/', function () {
    return view('index');
});

//Route::get('/about', function () {
//    return view('about');
//});
//
//Route::post('/catalog', function () {
//    return view('catalog');
//});
//
//Route::post('/basket', function () {
//    return view('basket');
//});
//
//Route::get('/catalog', function () {
//    return view('catalog');
//});
//
//Route::get('/basket', function () {
//    return view('basket');
//});
//
//Route::get('/black_tile', function () {
//    return view('black_tile');
//});
//
//Route::get('/item_forel400', function () {
//    return view('item_forel400');
//});
//
//Route::get('/item_garbusha300', function () {
//    return view('item_garbusha300');
//});
//
//Route::get('/item_garbusha500', function () {
//    return view('item_garbusha500');
//});
//
//Route::get('/item_kita500', function () {
//    return view('item_kita500');
//});
//
//Route::get('/item_losos500', function () {
//    return view('item_losos500');
//});
//
//Route::get('/item_nerka500', function () {
//    return view('item_nerka500');
//});
//
//Route::get('/item_osetra100', function () {
//    return view('item_osetra100');
//});
//
//Route::get('/item_osetra200', function () {
//    return view('item_osetra200');
//});
//
//Route::get('/item_osetra500', function () {
//    return view('item_osetra500');
//});
//
//Route::get('/item_shuka100', function () {
//    return view('item_shuka100');
//});
//
//Route::get('/red_tile', function () {
//    return view('red_tile');
//});
