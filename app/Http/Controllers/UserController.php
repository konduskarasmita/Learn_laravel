<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Models\User;

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
    exit;
   }

   function addUser(Request $request)
   {
      $request->validate([
         'username'=>'required |min:3 |max:12 | Uppercase',
         'skill'=>'required |email',
         'gender'=>'required',
         'city'=>'required ',
      ],[
         'username.required'=>'Username must have valid value',
         'username.min'=>'Username must have 3 characters',
         'username.max'=>'Username must have 12 characters',
      ]);

      return $request;
   }

  function UserList(){
   $return =  DB::select('select * from users ');
   return view('userList', ['users'=>$return]);
  }

//   database query builder
//   function queries()
//   {
//    // $response = DB::table('users')->get();
//    // $response = DB::table('users')->where('id',1)->get();
//    // $response = DB::table('users')->first();
//    // $response = DB::table('users')->insert([
//    //    'name'=>'Harshada Konduskar',
//    //    'email'=>'harshadakonduskar123@gmail.com',
//    //    'password'=>'Harshada@#123',
//    //    'remember_token'=>'harshada_konduskar',
//    //    'created_at'=> NOW(),
//    //    'updated_at'=> NOW()
//    // ]);
//    $response = DB::table('users')->where('id',4)->update(['name'=>'Vaibhav Konduskar']);
//    // $response = DB::table('users')->where('id',4)->delete();

//    return $response;
//   }

// model query builder
function queries(){
   // $response = User::all();
   // $response = User::get();
   // $response = User::where('id',2)->get();
   // $response = User::find(2);
   // $response = User::insert([
   //    'name'=> 'Lavnya Konduskar',
   //    'email'=>'lavnya@gmail.comm',
   //    'password'=>'Harshada@#123',
   //     'remember_token'=>'harshada_konduskar',
   //    'created_at'=> NOW(),
   //    'updated_at'=> NOW()
   // ]);

   $response = User::where('id','5')->update(['password'=>'lavu@#123']);

   return $response;
}
}
