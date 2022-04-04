<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompeniesController extends Controller
{
    //
    function showCompenies()
    {
        return view('admin.compenies.compeniesList');
    }
}