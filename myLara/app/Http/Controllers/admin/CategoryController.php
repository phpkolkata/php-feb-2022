<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    //
    function index(){

            // $users = DB::table('category')
            // ->select('id', 'name as cat_name')
            // ->get();
            // return $users;

        $dbCategory = DB::table('category')->get();
        // return $dbCategory;
        return view('admin.category',["db"=>$dbCategory]);
    }

    function destroy($id){
        $del = DB::table('category')->where('id','=',$id)->delete();
        return redirect()->route('admin.category')->with('msg','Category Deleted!');
    }
}
