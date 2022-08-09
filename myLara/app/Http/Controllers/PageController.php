<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function page1(){
        return view('pages.page1');
     }
     function page2(){
        return view('pages.page2');
     }

     function form(){
        return view('pages.form');
     }

     function formSubmit(Request $r){

        // $data = $r->input('nm');
        // $data = $r->all();
        // $data = $r->except('_token');

        //validation logic
        $validated = $r->validate([
            'name' => 'required',
            'age' => 'required|numeric|max:99',
        ]);
        // return $data;
     }
}
