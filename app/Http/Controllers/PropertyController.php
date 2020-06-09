<?php

namespace App\Http\Controllers;

use App\Property;
use App\RequestProperty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PropertyController extends Controller
{
    public function index()
    {
        $properties = Property::all();
        return view('list_property')->with('properties', $properties);
    }
    public function store(Request $request)
    {
        $property = Property::create(array_merge($request->all(), ['user_id' => Auth::user()->id]));
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image_name = Str::random() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('properties/'), $image_name);
            $property->image = $image_name;
            $property->save();
        }
        if ($property) {
            return redirect()->route('property.index');
        }
    }
    public function addAProperty()
    {
        return view('add_property');
    }
    public function requestProperty($id, Request $request)
    {
        $property = Property::find($id);
        return view('request_property')->with('property', $property);
    }

    public function postRequestProperty(Request $request)
    {
        $req = RequestProperty::create($request->all());
        return redirect()->route('property.index');
    }
}
