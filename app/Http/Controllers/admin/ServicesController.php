<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
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
    function upload(Request $request){
        $validated = $request->validate([
            'image' => 'required',
            'title' => 'required|max:20|unique:services',
            'des' => 'required',
        ]);
        
        $serv = new Services();
        $serv->title = $request->title ;
        $serv->description = $request->des ;

        
        // todo : upload file 
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = Str::slug($request->title).'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/services');
            $imagePath = $destinationPath. "/".  $name;
            $image->move($destinationPath, $name);
            $serv->image = $name;
            print_r($imagePath);
          }
          
        
        $serv->is_active = empty($request->is_active) ? 0 : 1 ;
        $serv->save();
        
        return redirect()->route('adminServices')->with('message' , 'Compeny added successfully');
    }
}