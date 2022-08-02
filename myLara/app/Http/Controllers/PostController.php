<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
        public $posts = [
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

    function index(){
        return view('posts.all',['posts'=>$this->posts]);
    }

    function find($id=1){
        abort_if(!isset($this->posts[$id]), 404);
        $data = $this->posts[$id];
        return view('posts.show',['data'=>$data]);
    }
}
