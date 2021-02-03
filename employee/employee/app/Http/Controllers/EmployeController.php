<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Employe;
use Carbon\Carbon;
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
            'phone_number' => 'required|digits:10',
            'pincode' => 'required|digits:6',
            'date_of_birth' => 'required',
            'email' => 'email',
            'passwords' => 'required',
            'hobbies' => 'required',
            'file_name' => 'required|mimes:pdf,docx,xlsx,xls|max:2048'
        ],[
            'first_name.required' => 'Enter your FirstName',
            'first_name.min' => 'FirstName should be atleast :min characters',
            'first_name.max' => 'FirstName should not be greater than :max characters',
            'last_name.required' => 'Enter your LastName',
            'last_name.min' => 'LastName should be atleast :min characters',
            'last_name.max' => 'LastName should not be greater than :max characters',
            'gender.required' => 'Select your Gender',
            'city.required' => 'City is required',
            'age.required' => 'Select your Age',
            'state.required' => 'Select your State',
            'country.required' => 'Select your Country',
            'phone_number.required' => 'Enter your phone number',
            'pincode.required' => 'Enter your pincode',
            'date_of_birth.required' => 'Fill your DOB',
            'email.required' => 'We need your email address',
            'passwords.required' => 'Please fill your password',
            'hobbies.required' => 'Select Your Hobbies',
            'file_name.required' => 'Please Upload the File',
            'file_name.mimes' => 'supported files are PDF,docx,xlsx,xls'
        ]);
        $timeStamp=Carbon::now()->format('Y_m_d_H_i_s');
            //dd($file);
            $fileExtension=$request->file_name->extension();
            $fileName = $timeStamp.'.'.$fileExtension;
            //dd($fileName);
            $request->file_name->storeAs('public/images', $fileName);
        $member = new Employe;
        $member->first_name=$request->first_name;
        $member->last_name=$request->last_name;
        $member->gender=$request->gender;
        $member->city=$request->city;
        $member->age=$request->age;
        $member->state=$request->state;
        $member->country=$request->country;
        $member->phone_number=$request->phone_number;
        $member->pincode=$request->pincode;
        $member->date_of_birth=$request->date_of_birth;
        $member->email=$request->email;
        $member->passwords=bcrypt($request->passwords);
        $member->hobbies=implode(',',$request->hobbies);
        $member->file_name=$fileName;
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
        $timeStamp=Carbon::now()->format('Y_m_d_H_i_s');
            //dd($file);
            $fileExtension=$request->file_name->extension();
            $fileName = $timeStamp.'.'.$fileExtension;
            //dd($fileName);
            $request->file_name->storeAs('public/images', $fileName);
        $data = Employe :: find($request->id);
        $data->first_name=$request->first_name;
        $data->last_name=$request->last_name;
        $data->gender=$request->gender;
        $data->city=$request->city;
        $data->age=$request->age;
        $data->state=$request->state;
        $data->country=$request->country;
        $data->phone_number=$request->phone_number;
        $data->pincode=$request->pincode;
        $data->date_of_birth=$request->date_of_birth;
        $data->email=$request->email;
        $data->passwords=bcrypt($request->passwords);
        $member->hobbies=implode(',',$request->hobbies);
        $member->file_name=$fileName;
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
