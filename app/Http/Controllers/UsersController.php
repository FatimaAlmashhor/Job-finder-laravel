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

    public function checkRole()
    {
        if (Auth::user()->hasRole('admin'))
            return 'adminJobs';
        else
            return 'home';
    }

    // for client
    function clientRegister(Request $request)
    {
        $user  = new User();
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

        if ($user->save()) {
            echo "I am inside the consition";
            $user->attachRole('client');
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
        if (Auth::check())
            return redirect()->route($this->checkRole());
        else
            return view('admin.users.register_form');
    }


    // for register
    function adminRegister(Request $request)
    {
        $user  = new User();
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

        if ($user->save()) {
            echo "I am ";
            $user->attachRole('admin');
            return redirect()->route('AdminShowlogin')->with('message', 'register done sucessfully');
        }
    }


    // for login
    function showAdminLogin()
    {
        if (Auth::check())
            return redirect()->route($this->checkRole());
        else
            return view('admin.users.login_form');
    }

    function adminLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('adminJobs')->with('message', 'login done sucessfully');
        } else {
            return redirect()->route('AdminShowlogin')->with('message', 'user do not exits');
        }
    }

    function adminLogout()
    {
        Auth::logout();
        return redirect()->route('AdminShowlogin');
    }
}