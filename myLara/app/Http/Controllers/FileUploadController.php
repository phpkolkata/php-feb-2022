<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function index(){
        return view('fileUpload');
    }

    public function uploadfile(Request $request){
        dump($request->all());

        if($request->hasFile('img')){
            $file = $request->img;
            $fileSave = $file->store('profile');
        }


    }
}
