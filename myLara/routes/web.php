<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;

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



Route::get('/',[HomeController::class, 'index'])->name('home');

Route::get('/page1',[PageController::class, 'page1'])->name('pages.page1');
Route::get('/page2',[PageController::class, 'page2'])->name('pages.page2');
Route::get('/pages/form',[PageController::class, 'form'])->name('pages.form');
Route::post('/pages/form-submit',[PageController::class, 'formSubmit'])->name('pages.form.submit');

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{id?}', [PostController::class, 'find'])->where('id','[0-9]+');


// Route::get('/admin/products', [ProductController::class, 'index']);
// Route::get('/admin/category', [CategoryController::class, 'index']);

Route::prefix('admin')->group(function(){
    Route::get('/products', [ProductController::class, 'index']);
    Route::get('/category', [CategoryController::class, 'index'])->name('admin.category');
    Route::get('/category/add', [CategoryController::class, 'create'])->name('admin.cat.add');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('admin.cat.store');
    Route::get('/category/del/{id}', [CategoryController::class, 'destroy'])->name('admin.cat.del');
});

// Route::get('/admin/products', );


// MVC -
// Model - business login handler (logic, db)
// View - display part handler (html css js etc)
// Controller - model & view handler
