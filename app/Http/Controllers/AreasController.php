<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Areas;

class AreasController extends Controller
{
    function show(){
        $areas = Areas::all();
        return view('area.list', compact('areas'));
    }

    function form(){
        return view('area/form');
    }

    function save(Request $request){



        $area = new Area();
        $area ->name =$request->name;

        $area->save();

        return redirect('/areas');
    }
}
