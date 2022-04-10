<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Compenies;
use App\Models\jobs;
use App\Models\JobType;
use Illuminate\Contracts\Queue\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobsController extends Controller
{
    //
    function show()
    {
        $jobs =  jobs::get();
        return view('admin.jobs.jobsList')->with('jobs', $jobs);
    }
    function add()
    {
        $compeny = Compenies::where('is_active', 1)->get();
        $jobtype = JobType::where('is_active', 1)->get();
        return view('admin.jobs.job_form')->with(['compenies' => $compeny, 'jobTypes' => $jobtype]);
    }

    function upload(Request $request)
    {
        $request->validate([
            'title' => 'required|max:20',
            'des' => 'required',
            'location' => 'required',
        ]);

        $job = new Jobs();
        $job->title = $request->title;
        $job->description = $request->des;
        $job->location = $request->location;
        $job->sallary = $request->sallary;
        $job->compeny_id = $request->compeny;
        $job->job_types_id = $request->jobType;
        $job->user_id = Auth::user()->id;

        $job->is_active = empty($request->is_active) ? 0 : 1;
        if ($job->save()) {

            return redirect()->route('adminJobs')->with('message', 'job added successfully');
        };
        return redirect()->route('adminAddJob')->with('message', 'job failed');
    }
}