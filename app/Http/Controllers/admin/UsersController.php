<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User ;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    //
    function showUsers()
    {
        return view('admin.users.usersList');
    }
    function clientRegister(Request $request){
        print_r('here just un test');
        /* // TODO: 
         * get the data
         * valifation
         * seve the data to the DB 
         * get the route 
         * */ 
        $user  = new User();
        $validated = $request->validate([
            'fullname' => 'required|max:20',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'cpassword' => 'required|same:password',
        ]);
        $user->name = $request->fullname ;
        $user->email = $request->email ;
        $user->password = Hash::make($request->password)  ;

        if($user->save()){
            $user->attachRole('client');
            return Route::redirect()->route('login')->with('message' , 'register done sucessfully');
        }
        
    }
    function clientLogin(Request $request){
        
    }
}