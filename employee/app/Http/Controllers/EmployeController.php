<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Employe;
use Illuminate\Support\Facades\DB;


class EmployeController extends Controller
{
    public function index(){
        $model = Employe::all();
        return View::make('employe.employelist',['model' =>$model]);

    }
    public function create(){
        $ages=[];
        for($i=18;$i<100;$i++){
            $ages[]=$i;
        }
        $state=['TN','AP','KERALA','UP'];
        $country=['India','USA'];
        return View::make('employe.employeform',['ages'=>$ages,'state'=>$state,'country'=>$country]);
    }
    public function store(Request $request){
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
        return redirect()->route('employes.create');

    }
    public function edit(){

    }
    public function update(){

    }
    public function destroy(){

    }
    public function show(){

    }
}
