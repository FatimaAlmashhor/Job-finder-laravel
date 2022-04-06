<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
        $comps = new Compenies();
        $comps->name = $request->title ;
        $comps->description = $request->des ;
        $comps->country = $request->country ;
        $comps->city = $request->city ;
        
        // todo : upload file 
        $test = $request->file('image') ;
       
       print_r($test);
        $comps->icon = $request->file('image') ;
        
        $comps->is_active = empty($request->is_active) ? 0 : 1 ;
        // $comps->save();
        
        // return redirect()->route('admin/compenies');
    }
}