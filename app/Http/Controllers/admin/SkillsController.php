<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
    function upload(){
        $req = $request->input('title', 'default');
    }
}