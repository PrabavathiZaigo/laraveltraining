<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index(){
        $model = Student::all();
        return View::make('studentlist',['model' =>$model]);
    }
    public function create(){
        return View::make('studentform');
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required|min:6|max:10',
            'age' => 'required|min:1|max:3',
            'phone' => 'required|min:1|max:10'
            ],[
            'name.required' => 'Name is Required',
            'name.min' => 'Name should be atleast :min characters',
            'name.max' => 'Name should not be greater than :max characters',
            'age.required' => 'age is Required',
            'age.min' => 'Name should be atleast :min characters',
            'age.max' => 'Name should not be greater than :max characters',
            'phone.required' => 'phone_number is Required',
            'phone.min' => 'Name should be atleast :min characters',
            'phone.max' => 'Name should not be greater than :max characters'

            ]);
        $member = new Student;
        $member->name = $request->name;
        $member->age = $request->age;
        $member->phone_number = $request->phone;
        $member->save();
        return redirect()->route('student_list')->with("success","Done");
    }
    public function edit($id){
        $data = Student :: find($id);
        return View::make('studentupdate',['data' => $data]);
    }
    public function update(Request $request){
        $data = Student :: find($request->id);
        $data->name = $request->name;
        $data->age = $request->age;
        $data->phone_number = $request->phone;
        $data->update();
        return redirect()->route('student_list')->with("success","Done");
    }
    public function show(){
        
    }
    public function destroy($id){
        $data = Student :: find($id);
        $data->delete();
        return redirect()->route('student_list')->with("success","Done");
        

    }
}
