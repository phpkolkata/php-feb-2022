<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    function index(){

        return Product::all();
        // return view('admin.products');
    }
}
