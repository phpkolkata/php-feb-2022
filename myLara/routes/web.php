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

// Route::get('/', function () {
//     return view('welcome');
// });

$posts = [
    1=>[
        'title'=>'My Post 1',
        'content'=> 'this is post 1 content',
        'is_new'=>false

    ],
    2=>[
        'title'=>'My Post 2',
        'content'=> 'this is post 2 content',
        'is_new'=>true
    ],
    3=>[
        'title'=>'My Post 3',
        'content'=> 'this is post 3 content',
        'is_new'=>false
    ]
];

Route::get('/',function(){
   return view('index');
})->name('home');

Route::get('/page1',function(){
   return view('pages.page1');
})->name('pages.page1');

Route::get('/page2',function(){
   return view('pages.page2');
})->name('pages.page2');

Route::get('/posts', function() use($posts){

    return view('posts.all',['posts'=>$posts]);
});

Route::get('/posts/{id?}', function($id=1) use($posts){
    abort_if(!isset($posts[$id]), 404);
    $data = $posts[$id];
    return view('posts.show',['data'=>$data]);
})->where('id','[0-9]+');


Route::get('/admin/products', function(){
    return view('admin.products');
});

Route::get('/admin/category', function(){
    return view('admin.category');
});


// Route::get('/admin/products', );


// MVC -
// Model - business login handler (logic, db)
// View - display part handler (html css js etc)
// Controller - model & view handler
