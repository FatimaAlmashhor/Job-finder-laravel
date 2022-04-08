<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Compenies;


class CompeniesController extends Controller
{
    //
    function show()
    {
        $compenies = Compenies::where('is_active' , 1)->get();
        return view('admin.compenies.compeniesList')->with('compenies', $compenies);
    }
    function add(){
        return view('admin.compenies.compenies_form');
    }
    function upload(Request $request){

        $validated = $request->validate([
            'name' => 'required|max:20',
            'des' => 'required',
            'country' => 'required',
            'city' => 'required',
        ]);
        
        $comps = new Compenies();
        $comps->name = $request->name ;
        $comps->description = $request->des ;
        $comps->country = $request->country ;
        $comps->city = $request->city ;
        
        // todo : upload file 
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = Str::slug($request->name).'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/compenies');
            $imagePath = $destinationPath. "/".  $name;
            $image->move($destinationPath, $name);
            $comps->icon = $name;
            print_r($imagePath);
          }
          
        
        $comps->is_active = empty($request->is_active) ? 0 : 1 ;
        $comps->save();
        
        return redirect()->route('admin/compenies');
    }
}