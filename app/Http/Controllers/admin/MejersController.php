<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MejersController extends Controller
{
    //
    function showMajers()
    {
        return view('admin.mejers.mejersList');
    }
}