<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    //
    function index()
    {
        return view('index');
    }
    function aboutUs()
    {
        return view('aboutus');
    }
    function ourServices()
    {
        return view('ourservices');
    }
    function connectUs()
    {
        return view('contactus');
    }
}