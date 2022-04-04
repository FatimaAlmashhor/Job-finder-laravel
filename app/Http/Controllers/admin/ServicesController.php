<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    //
    function showServices()
    {
        return view('admin.serives.servicesList');
    }
}