<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    //
    function index(){

            // $users = DB::table('category')
            // ->select('id', 'name as cat_name')
            // ->get();
            // return $users;

            //Query Builder
        // $dbCategory = DB::table('category')->get();
        // $dbCategory = DB::table('category')->paginate(5);
        // return $dbCategory;

        // Eloquent ORM
        // $dbCategory = Category::all();
        $dbCategory = Category::paginate(5);
        return view('admin.category.index',["db"=>$dbCategory]);
    }

    function create(){
        return view("admin.category.create");
    }

    function store(Request $r){
        // return $r->except('_token');
        // method 1
        // $dbCategory = new Category();
        // $dbCategory->name = $r->input('name');
        // $dbCategory->is_active = $r->input('is_active');
        // $dbCategory->save();

        // method 2
        $data = $r->except('_token');
        // return $data;
        Category::create($data);

        return redirect()->route('admin.category')->with('msg', 'Category Added!');
    }

    function destroy($id){
        $del = DB::table('category')->where('id','=',$id)->delete();
        return redirect()->route('admin.category')->with('msg','Category Deleted!');
    }

     function edit($id){
            $data = DB::table('category')->where('id',$id)->get();
            // return $data;
        return view('admin.category.edit',["data"=>$data[0]]);
    }

    function update(Request $r){
        $data = $r->except("_token");
        $affected = DB::table('category')
            ->where('id', $data['id'])
            ->update($data);

        // return "test";
            return redirect()->route('admin.category')->with('msg','Category Updated!');
}

}
