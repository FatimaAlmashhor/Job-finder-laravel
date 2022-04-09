<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mejers ;

class MejersController extends Controller
{
    //
    function show()
    {
        $majers =  Mejers::get();
        return view('admin.mejers.mejersList')->with('mejers' , $majers);
    }
    function add(){
        return view('admin.mejers.mejer_form');
    }
    function upload(Request $request){
        $validated = $request->validate([
            'title' => 'required|max:20|unique:skills',
        ]);
        $mejer = new Mejers();
        $mejer->title = $request->title ;
        $mejer->is_active = empty($request->is_active) ? 0 : 1 ;
        $mejer->save();
        
        return redirect()->route('adminMejers')->with('message' , 'Skill added successfully');
    }
}