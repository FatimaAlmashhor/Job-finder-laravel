<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class jobsController extends Controller
{
    //
    function index()
    {
        return view('jobs');
    }

    function details()
    {
        return view('jobdetails');
    }
}