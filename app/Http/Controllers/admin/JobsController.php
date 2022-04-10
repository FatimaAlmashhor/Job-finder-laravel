<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Compenies;
use App\Models\jobs;
use App\Models\JobType;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    //
    function show()
    {
        return view('admin.jobs.jobsList');
    }
    function add()
    {
        $compeny = Compenies::where('is_active', 1)->get();
        $jobType = JobType::where('is_active', 1)->get();
        return view('admin.jobs.job_form')->with(['compines' => $compeny, 'jobTypes' => $jobType]);
    }
}