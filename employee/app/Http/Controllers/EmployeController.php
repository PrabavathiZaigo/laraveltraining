<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Employe;
use Illuminate\Support\Facades\DB;


class EmployeController extends Controller
{
    public function index(){
        $model = Employe::orderBy('id','DESC')->paginate(5);
        return View::make('employe.employelist',['model' =>$model]);

    }
    public function create(){
        $ages=[];
        for($i=18;$i<100;$i++){
            $ages[]=$i;
        }
        $state=[1 => 'TN',2 => 'AP',3 => 'KERALA',4 => 'UP'];
        $country=[1 => 'India',2 => 'USA'];
        return View::make('employe.employeform',['ages'=>$ages,'state'=>$state,'country'=>$country]);
    }
    public function store(Request $request){
        $request->validate([
            'first_name' => 'required|min:3|max:10',
            'last_name' => 'required|min:2|max:6',
            'gender' =>'required',
            'city' => 'required',
            'age' => 'required',
            'state' => 'required',
            'country' => 'required',
            'phone' => 'required|digits:10',
            'pincode' => 'required|digits:6',
            'date' => 'required',
            'email' => 'email',
            'password' => 'required',
        ],[
            'first_name.required' => 'Name is Required'
        ]);
        $member = new Employe;
        $member->first_name=$request->first_name;
        $member->last_name=$request->last_name;
        $member->gender=$request->gender;
        $member->city=$request->city;
        $member->age=$request->age;
        $member->state=$request->state;
        $member->country=$request->country;
        $member->phone_number=$request->phone;
        $member->pincode=$request->pincode;
        $member->date_of_birth=$request->date;
        $member->email=$request->email;
        $member->password=$request->password;
        $member->save();
        return redirect()->route('employes.index');

    }
    public function edit($id){
        $ages=[];
        for($i=18;$i<100;$i++){
            $ages[]=$i;
        }
        $state=[1 => 'TN',2 => 'AP',3 => 'KERALA',4 => 'UP'];
        $country=[1 => 'India',2 => 'USA'];

        $data = Employe :: find($id);
        return View::make('employe.employeupdate',['data' => $data, 'ages'=>$ages, 'state'=>$state, 'country'=>$country]);
    }
    public function update(Request $request){
        $data = Employe :: find($request->id);
        $data->first_name=$request->first_name;
        $data->last_name=$request->last_name;
        $data->gender=$request->gender;
        $data->city=$request->city;
        $data->age=$request->age;
        $data->state=$request->state;
        $data->country=$request->country;
        $data->phone_number=$request->phone;
        $data->pincode=$request->pincode;
        $data->date_of_birth=$request->date;
        $data->email=$request->email;
        $data->password=$request->password;
        $data->update();
        return redirect()->route('employes.index')->with("success","Done");
    }
    public function destroy($id){
        $delete = Employe :: find($id);
        $delete->delete();
        return redirect()->route('employes.index')->with("success","Done");

    }
    public function show(){

    }
}
