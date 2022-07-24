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
        'content'=> 'this is post 1 content'
    ],
    2=>[
        'title'=>'My Post 2',
        'content'=> 'this is post 2 content'
    ],
    3=>[
        'title'=>'My Post 3',
        'content'=> 'this is post 3 content'
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

Route::get('posts/{id?}', function($id=1) use($posts){
    $data = $posts[$id];
    return view('posts.show',['data'=>$data]);
})->where('id','[0-9]+');
