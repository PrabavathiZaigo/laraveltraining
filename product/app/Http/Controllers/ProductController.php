<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = Product::orderBy('id','DESC')->paginate(5);
        return View::make('product.customerlist',['model' =>$model]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('product.registrationform');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|min:3|max:10',
            'last_name' => 'required|min:2|max:6',
            'gender' =>'required',
            'city' => 'required',
            'phone_number' => 'required|digits:10',
            'email' => 'email',
            'passwords' => 'required',
            
        ],[
            'first_name.required' => 'Enter your FirstName',
            'first_name.min' => 'FirstName should be atleast :min characters',
            'first_name.max' => 'FirstName should not be greater than :max characters',
            'last_name.required' => 'Enter your LastName',
            'last_name.min' => 'LastName should be atleast :min characters',
            'last_name.max' => 'LastName should not be greater than :max characters',
            'gender.required' => 'Select your Gender',
            'city.required' => 'City is required',
            'phone_number.required' => 'Enter your phone number',
            'email.required' => 'We need your email address',
            'passwords.required' => 'Please fill your password',
        ]);
        $customer = new Product;
        $customer -> first_name = $request -> first_name;
        $customer -> last_name = $request -> last_name;
        $customer -> gender = $request -> gender;
        $customer -> city = $request -> city;
        $customer -> phone_number = $request -> phone_number;
        $customer -> email = $request -> email;
        $customer -> password = bcrypt($request -> password);
        $customer ->save();
        return redirect()->route('products.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Product :: find($id);
        return View::make('product.customerupdate',['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'first_name' => 'required|min:3|max:10',
            'last_name' => 'required|min:2|max:6',
            'gender' =>'required',
            'city' => 'required',
            'phone_number' => 'required|digits:10',
            'email' => 'email',
            'passwords' => 'required',
            
        ],[
            'first_name.required' => 'Enter your FirstName',
            'first_name.min' => 'FirstName should be atleast :min characters',
            'first_name.max' => 'FirstName should not be greater than :max characters',
            'last_name.required' => 'Enter your LastName',
            'last_name.min' => 'LastName should be atleast :min characters',
            'last_name.max' => 'LastName should not be greater than :max characters',
            'gender.required' => 'Select your Gender',
            'city.required' => 'City is required',
            'phone_number.required' => 'Enter your phone number',
            'email.required' => 'We need your email address',
            'passwords.required' => 'Please fill your password',
        ]);
        $data = Product :: find($request->id);
        $data -> first_name = $request -> first_name;
        $data -> last_name = $request -> last_name;
        $data -> gender = $request -> gender;
        $data -> city = $request -> city;
        $data -> phone_number = $request -> phone_number;
        $data -> email = $request -> email;
        $data -> password = bcrypt($request -> password);
        $data ->update();
        return redirect()->route('products.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Product :: find($id);
        $delete->delete();
        return redirect()->route('products.index')->with("success","Done");
    }
    public function manager()
    {
        return View::make('product.manager');
    }
    public function customer()
    {
        return View::make('product.customer');
    }
}
