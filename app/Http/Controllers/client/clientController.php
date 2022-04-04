<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class clientController extends Controller
{
    //
    function showHome()
    {
        return view('client.index');
    }
    function showJobs()
    {
        return view('client.jobs');
    }
    function showJobDetails()
    {
        return view('client.jobDetails');
    }
    function showCompenies()
    {
        return view('client.compenies');
    }
    function showConnectUs()
    {
        return view('client.contactus');
    }
    function showAboutUs()
    {
        return view('client.aboutus');
    }
    function showOurServices()
    {
        return view('client.ourservices');
    }
    function showProfile()
    {
        return view('client.profile');
    }
    function showEditProfile()
    {
        return view('client.editprofile');
    }
    function showLogin()
    {
        return view('client.login');
    }
    function showRegister()
    {
        return view('client.singin');
    }
}