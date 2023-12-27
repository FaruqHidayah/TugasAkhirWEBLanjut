<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Form extends Controller
{
    public function input()
    {
        return view('FormInput');
    }

    public function show(Request $request)
    {
        $name = $request->name;
        $id = $request->id;
        $address = $request->address;
        $grade = $request->grade;

        return view('formOutput')->with(['name'=>$name, 'id'=>$id, 'address'=>$address, 'grade'=>$grade]);
    }
}
