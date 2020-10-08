<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WishlistController;
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

Route::redirect('/', '/admin/lista');

Route::prefix('/admin')->name('admin.')->group(function(){
    Route::get('/lista', [WishlistController::class,'list'])->name('list');
    Route::get('/lista/salvar', [WishlistController::class,'form'])->name('form');
    Route::post('/lista/salvar', [WishlistController::class,'save'])->name('save');

});
