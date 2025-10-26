<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
   function getUser(){
    return 'Asmita Konduskar.';
   }
   function UserData($name)
   {
        return view('user',['name'=>$name]);
   }
   function adminLogin(){
    return view('admin.login');
   }
}
