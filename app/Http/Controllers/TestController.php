<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class TestController extends Controller
{
    public function index()
    {
    	$isEdit = false;
    	$data = User::all();
        return view('test',compact('data','isEdit'));
    }
    public function create(Request $request)
    {
    	$request->validate([
    		'name' 		=> 	'required',
    		'email'		=>	'required|unique:users,email',
    		'password'	=>	'required'
    	]);
       	User::create($request->all());
        return redirect()->route('test')->with('message','User Successfully Created!');
    }

    public function edit($id)
    {
    	$isEdit = true;
    	$data = User::get();
    	$specified_user = User::find($id);
    	return view('test',compact('specified_user','data','isEdit'));
    }

    public function update(Request $request,$id)
    {
        $user = User::find($id);
        $user->update($request->all());
        return redirect()->route('test')->with('message','User Successfully Updated!');
    }

    public function delete($id)
    {
    	$user  = User::find($id);
    	$user->delete();
    	return redirect()->route('test'); 
    }

}

