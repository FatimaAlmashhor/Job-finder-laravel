<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Services ;

class ServicesController extends Controller
{
    //
    function show()
    {
        $services = Services::where('is_active' , 1)->get();
        return view('admin.serives.servicesList')->with('services' , $services);
    }
    function add (){
        return view('admin.serives.services_form');
    }
    function upload(){
        
    }
}