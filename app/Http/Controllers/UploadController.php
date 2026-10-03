<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    //
    function upload(){
        return view('upload');
    }

    function uploadFile(Request $request){
        if ($request->hasFile('file')) {
        $path = $request->file('file')->store('public');
        $filepath = explode("/",$path);
        $filename = $filepath[1];
        return view('display',["path"=>$filename]);
    } else {
        return "No file uploaded";
    }
    }
}
