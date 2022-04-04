<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    //
    function showJobs()
    {
        return view('admin.jobs.jobsList');
    }
}