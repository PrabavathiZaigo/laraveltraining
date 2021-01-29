<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\ExampleModel;
use Illuminate\Support\Facades\DB;

class ExampleController extends Controller
{
    function index(){
        $model = ExampleModel::all();
        return View::make('studentlist',['model' =>$model]);
    }
    function create(Request $request){
        $member = new ExampleModel;
        $member->name = $request->name;
        $member->age = $request->age;
        $member->phone_number = $request->phone;
        $member->save();
        return redirect()->route('student_list')->with("success","Done");
    }
    function store(){

    }
    function edit(){

    }
    function update(){

    }
    function show(){
        return View::make('studentform');
    }
    function destroy(){

    }
}
