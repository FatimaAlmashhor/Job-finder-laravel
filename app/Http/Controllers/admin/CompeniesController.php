<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Compenies;
use Illuminate\Support\Facades\Auth;

class CompeniesController extends Controller
{
    //
    function show()
    {
        $compenies = Compenies::where('is_active', 1)->get();
        return view('admin.compenies.compeniesList')->with('compenies', $compenies);
    }
    function add()
    {
        return view('admin.compenies.compenies_form');
    }
    function upload(Request $request)
    {

        $validated = $request->validate([
            'image' => 'required',
            'name' => 'required|max:20',
            'des' => 'required',
            'country' => 'required',
            'city' => 'required',
        ]);

        $comps = new Compenies();
        $comps->name = $request->name;
        $comps->description = $request->des;
        $comps->country = $request->country;
        $comps->city = $request->city;

        // todo : upload file 
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = Str::slug($request->name) . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/compenies');
            $imagePath = $destinationPath . "/" .  $name;
            $image->move($destinationPath, $name);
            $comps->icon = $name;
            print_r($imagePath);
        }


        $comps->is_active = empty($request->is_active) ? 0 : 1;
        $comps->save();

        return redirect()->route('adminCompenies')->with('message', 'Compeny added successfully');
    }
    function edit($id)
    {
        $data = Compenies::find($id);
        return view('admin.compenies.compenies_form')->with(['data' => $data]);
    }
    function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'required',
            'name' => 'required|max:20',
            'des' => 'required',
            'country' => 'required',
            'city' => 'required',
        ]);

        $comps =  Compenies::find($id);
        $comps->name = $request->name;
        $comps->description = $request->des;
        $comps->country = $request->country;
        $comps->city = $request->city;

        // todo : upload file 
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = Str::slug($request->name) . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/compenies');
            $imagePath = $destinationPath . "/" .  $name;
            $image->move($destinationPath, $name);
            $comps->icon = $name;
            print_r($imagePath);
        }


        $comps->is_active = empty($request->is_active) ? 0 : 1;
        if ($comps->save()) {

            return redirect()->route('adminCompenies')->with('message', 'job added successfully');
        };
        return redirect()->route('adminAddCompeny')->with('message', 'data failed');
    }

    function delete(Request $request, $id)
    {
        $data =  Compenies::find($id);
        $data->is_active = 0;
        if ($data->save()) {

            return redirect()->route('adminCompenies')->with('message', 'data delete successfully');
        };
        return redirect()->route('adminCompenies')->with('message', 'data failed to deletion ');
    }
}