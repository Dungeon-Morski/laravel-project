<?php

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


Route::get('/products','App\Http\Controllers\ProductController@index')->name('product.index');

Route::get('/products/{product}','App\Http\Controllers\ProductController@show')->name('product.show');
Route::get('/','App\Http\Controllers\ProductController@index');

Route::get('/about','App\Http\Controllers\AboutController@index')->name('about');
Route::get('/contact','App\Http\Controllers\ContactController@index')->name('contact');

Route::get('/basket','App\Http\Controllers\BasketController@index')->name('basket');



Route::get('/cabinet', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('cabinet');
Route::get('/admin', function () {
    return view('admin.index');
})->middleware(['auth', 'verified','admin'])->name('admin');



Route::get('/admin/categories','App\Http\Controllers\AdminOrderController@category')->middleware(['auth', 'verified','admin'])->name('admin.categories-show');
Route::get('/admin/categories/create','App\Http\Controllers\AdminOrderController@categoryAdd')->middleware(['auth', 'verified','admin'])->name('admin.categoriesCreate');
Route::post('/admin/categories','App\Http\Controllers\AdminOrderController@categoryStore')->middleware(['auth', 'verified','admin'])->name('admin.categoryStore');
Route::delete('/admin/categories/{category}','App\Http\Controllers\AdminOrderController@categoryDestroy')->middleware(['auth', 'verified', 'admin'])->name('admin.categoryDestroy');

Route::get('/admin/products','App\Http\Controllers\AdminOrderController@index')->middleware(['auth', 'verified', 'admin'])->name('admin.products');
Route::get('/admin/products/create','App\Http\Controllers\AdminOrderController@productCreate')->middleware(['auth', 'verified','admin'])->name('admin.create');
Route::post('/admin/products/','App\Http\Controllers\AdminOrderController@productStore')->middleware(['auth', 'verified','admin'])->name('admin.productStore');

Route::get('/admin/products/{product}','App\Http\Controllers\AdminOrderController@show')->middleware(['auth', 'verified','admin'])->name('admin.show');



Route::delete('/admin/products/{product}','App\Http\Controllers\AdminOrderController@destroy')->middleware(['auth', 'verified','admin'])->name('admin.delete');
Route::get('/admin/products/{product}/edit','App\Http\Controllers\AdminOrderController@edit')->middleware(['auth', 'verified','admin'])->name('admin.edit');
Route::patch('/admin/products/{product}','App\Http\Controllers\AdminOrderController@update')->middleware(['auth', 'verified','admin'])->name('admin.update');
Route::get('/admin/orders','App\Http\Controllers\AdminOrderController@ordersShow')->middleware(['auth', 'verified','admin'])->name('admin.orders');





require __DIR__.'/auth.php';
