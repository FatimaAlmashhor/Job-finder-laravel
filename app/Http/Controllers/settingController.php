<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class settingController extends Controller
{
    //
    function generateRoles()
    {

        Role::create([
            'name' => 'super_admin',
            'display_name' => 'ادارة النظام', // optional
            //'description' => 'User is the owner of a given project', // optional
        ]);

        Role::create([
            'name' => 'admin',
            'display_name' => 'ادارة المحتوى', // optional
            //'description' => 'User is the owner of a given project', // optional
        ]);

        Role::create([
            'name' => 'client',
            'display_name' => 'العملاء', // optional
            //'description' => 'User is the owner of a given project', // optional
        ]);
    }
}