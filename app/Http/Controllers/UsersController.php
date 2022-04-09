<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    //
    function showUsers()
    {
        return view('admin.users.usersList');
    }

    function createRegister($request, $user)
    {
        /* // TODO: 
         * get the data
         * valifation
         * seve the data to the DB 
         * get the route 
         * */

        $validated = $request->validate([
            'fullname' => 'required|max:20',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'cpassword' => 'required|same:password',
        ]);
        $user->name = $request->fullname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
    }

    // for client
    function clientRegister(Request $request)
    {
        $user  = new User();
        $this->createRegister($request, $user);

        if ($user->save()) {
            echo "I am inside the consition";
            // $user->attachRole('client');
            return redirect()->route('login')->with('message', 'register done sucessfully');
        }
    }


    function clientLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('home')->with('message', 'login done sucessfully');
        }
    }
    function clientLogout()
    {
        Auth::logout();
        return redirect()->route('home')->with('message', 'Logout done sucessfully');
    }


    // admin
    function showAdminRegister()
    {
        return view('admin.users.register_form');
    }


    // for register
    function adminRegister(Request $request)
    {
        $user  = new User();
        $this->createRegister($request, $user);

        if ($user->save()) {
            echo "I am inside the consition";
            $user->attachRole('admin');
            // return redirect()->route('AdminShowlogin')->with('message', 'register done sucessfully');
        }
    }


    // for login
    function showAdminLogin()
    {
        return view('admin.users.login_form');
    }

    function adminLogin()
    {
    }
}