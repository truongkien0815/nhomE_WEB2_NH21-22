<?php

use App\Http\Controllers\DetailsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProtypesController;
<<<<<<< HEAD
use App\Http\Controllers\OthersController;
use App\Http\Controllers\PaymentsController;
=======
>>>>>>> nhomE_thinh
use App\Http\Controllers\ManufacturersController;
use App\Http\Controllers\UserController;
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
 
require __DIR__ . '/auth.php';   
<<<<<<< HEAD

Route::middleware(['auth'])->group(function () {
    // Admin
    Route::get('/admin', [MyController::class, 'admin']);
    Route::resource('/product', ProductsController::class);
    Route::resource('/user', UserController::class);
    Route::resource('/manufacturer', ManufacturersController::class);
    Route::resource('/protype', ProtypesController::class);
    Route::resource('/payment', PaymentsController::class);
    Route::resource('/detail', DetailsController::class);
    Route::resource('/other', OthersController::class);
});

Route::get('/mail', [MyController::class, 'mail']); 
Route::get('/createpayment', [MyController::class, 'createpayment']); 
Route::get('/payments', [MyController::class, 'payments']); 
Route::get('/user', [MyController::class, 'user']); 
Route::get('/sort/{option}/{key?}', [MyController::class, 'sort']); 
Route::get('/searchoption/{option}/{key?}', [MyController::class, 'searchoption']); 
Route::get('/search', [MyController::class, 'search']); 
Route::get('/others/clearcompare', [MyController::class, 'clearcompare']);
Route::get('/others/{name}/{product_id}/{user_id}/{option?}/{key?}', [MyController::class, 'others'])->name('others');
Route::get('/carts/{action?}/{product_id?}', [MyController::class, 'carts'])->name('carts');
=======

Route::middleware(['auth'])->group(function () {
    // Admin
    Route::get('/admin', [MyController::class, 'admin']);
    Route::resource('/product', ProductsController::class);
    Route::resource('/user', UserController::class);
    Route::resource('/manufacturer', ManufacturersController::class);
    Route::resource('/protype', ProtypesController::class);

});
Route::get('/mail', [MyController::class, 'mail']); 
Route::get('/createpayment', [MyController::class, 'createpayment']); 
// Route::get('/user', [MyController::class, 'user']); 
Route::get('/sort/{option}/{key?}', [MyController::class, 'sort']); 
Route::get('/searchoption/{option}/{key?}', [MyController::class, 'searchoption']); 
Route::get('/search', [MyController::class, 'search']); 
>>>>>>> nhomE_thinh
Route::get('/star/{manu_id}/{product_id}/{user_id}', [MyController::class, 'star']);
Route::get('/products/{product_id}/{manu_id}', [MyController::class, 'products'])->name('products');
Route::get('/{name?}', [MyController::class, 'index'])->name('index');