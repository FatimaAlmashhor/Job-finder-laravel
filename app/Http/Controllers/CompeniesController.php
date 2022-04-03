<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompeniesController extends Controller
{
    //
    function index()
    {
        return view('compenies');
    }
}