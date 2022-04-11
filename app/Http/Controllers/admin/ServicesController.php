<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Services;

class ServicesController extends Controller
{
    //
    function show()
    {
        $services = Services::where('is_active', 1)->get();
        return view('admin.services.servicesList')->with('services', $services);
    }
    function add()
    {
        return view('admin.services.services_form');
    }
    function upload(Request $request)
    {
        $validated = $request->validate([
            'image' => 'required',
            'title' => 'required|max:20|unique:services',
            'des' => 'required',
        ]);

        $serv = new Services();
        $serv->title = $request->title;
        $serv->description = $request->des;


        // todo : upload file 
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = Str::slug($request->title) . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/services');
            $imagePath = $destinationPath . "/" .  $name;
            $image->move($destinationPath, $name);
            $serv->image = $name;
            print_r($imagePath);
        }


        $serv->is_active = empty($request->is_active) ? 0 : 1;
        $serv->save();

        return redirect()->route('adminServices')->with('message', 'Service added successfully');
    }
    function edit($id)
    {
        $data = Services::find($id);
        return view('admin.services.services_form')->with(['data' => $data]);
    }
    function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'required',
            'title' => 'required|max:20|unique:services',
            'des' => 'required',
        ]);

        $serv =  Services::find($id);
        $serv->title = $request->title;
        $serv->description = $request->des;


        // todo : upload file 
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = Str::slug($request->title) . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/services');
            $imagePath = $destinationPath . "/" .  $name;
            $image->move($destinationPath, $name);
            $serv->image = $name;
            print_r($imagePath);
        }


        $serv->is_active = empty($request->is_active) ? 0 : 1;
        if ($serv->save()) {

            return redirect()->route('adminServices')->with('message', 'job added successfully');
        };
        return redirect()->route('adminAddServices')->with('message', 'data failed');
    }

    function delete(Request $request, $id)
    {
        $data =  Services::find($id);
        $data->is_active = 0;
        if ($data->save()) {

            return redirect()->route('adminServices')->with('message', 'data delete successfully');
        };
        return redirect()->route('adminServices')->with('message', 'data failed to deletion ');
    }
}