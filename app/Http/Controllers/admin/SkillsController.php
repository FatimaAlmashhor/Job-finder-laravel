<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skills ;

class SkillsController extends Controller
{
    //
    function show()
    {
        return view('admin.skills.skillsList');
    }
    function edit(){
        return view('admin.skills.skills_form');
    }
    function upload(Request $request){
        // $skill = Skills();
        $title = $request->title ;
        $title = $request->is_active ;
        print_r($title);
        
    }
}