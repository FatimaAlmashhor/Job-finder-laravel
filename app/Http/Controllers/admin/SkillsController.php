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
        $skills = Skills::get();
        // $skills->get
        // return response($skills);
        return view('admin.skills.skillsList')->with('skills' , $skills);
    }
    function add(){
        return view('admin.skills.skills_form');
    }
    function upload(Request $request){
        $skill = new Skills();
        $skill->title = $request->title ;
        $skill->is_active = empty($request->is_active) ? 0 : 1 ;
        $skill->save();
        
        return redirect()->route('admin/skills');
    }
}