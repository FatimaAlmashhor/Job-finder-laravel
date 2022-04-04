<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    //
    function showSkills()
    {
        return view('admin.skills.skillsList');
    }
}