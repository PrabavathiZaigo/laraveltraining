<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Model1Name;
use Illuminate\Support\Facades\DB;


class EmployeeController extends Controller
{
    function myfunction(){
        return View::make('greeting', ['name' => 'James', 'age' => 22]);

    }
    function myfunction1(){
        return View::make('form');
    }
    function myfunction2(Request $request){
        dd($request->all());
       // return View::make('store');
       echo "<pre>";
        print_r($_POST);
         $pincode = $_POST["pincode"];
        
        if($pincode % 2 == 0)
            echo "even <br>";
        else
            echo "odd <br>";
        
      echo  "</pre>";

      $id=DB::table('model1_names')->insert([
        
        'Name' => $_POST['name'],
        'Address' => $_POST['address'],
        'Pincode' => $_POST['pincode'],
        
    ]);
    return redirect()->route('list');

    DB::table('model1_names')->insertOrIgnore([
        ['Name' => 'revathi', 'Address' => 'thiruthani', 'Pincode' => '98765'],
        ['Name' => 'sadhana', 'Address' => 'chennai', 'Pincode' => '54672'],
    ]);
    
    }
    function list(){
        /*$users = DB::table('model1_names')->get();
        $users2 = DB::table('model1_names')->count();
        $users3 = DB::table('model1_names')->max('pincode');
        $users4 = DB::table('model1_names')->sum('pincode');
        $users5 = DB::table('model1_names')->min('pincode');
        $users1 = DB::table('model1_names')
        ->where('address', 'like', 'c%')
        ->where('id', '>', 10)
        ->orderBy('id', 'DESC')
        
        //->max('pincode');
        ->get();
        //print_r($users); exit();
        echo ($users2."<br>"); 
        echo ($users3."<br>");
        echo ($users4."<br>");
        echo ($users5."<br>");*/

        //$model = Model1Name::all();
        //$model = Model1Name::orderBy('id','DESC')->take(10)->get();
        //dd($model);
        $model = Model1Name::orderBy('id','DESC')->paginate(10);
        //return View::make('folder.studentlist', ['users' => $users, 'users1' => $users1]);
        return View::make('folder.studentlist',['model' =>$model]);

    }

    /*function list1(){
        $users2 = DB::table('model1_names')->count();
        return View::make('folder.studentlist1', $users2);
    }*/
    function myfunction3(){
        return View::make('emp.sample');
    }
    function myfunction4(){
        return View::make('emp.switch');
    }
    function myfunction5(){
        return View::make('emp.for');
    }
    function myfunction6(){
        return View::make('emp.foreach');
    }
    function myfunction7(){
        return View::make('emp.while');
    }
    function addData(Request $request)
    {
        $member = new Model1Name;
        $member->Name = $request->name;
        $member->Address = $request->address;
        $member->Pincode = $request->pincode;
        $member->save();
        return redirect()->route('student_details1')->with("success","Done");

    }

}