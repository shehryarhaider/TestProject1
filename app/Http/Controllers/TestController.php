<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class TestController extends Controller
{
    public function index()
    {
        $data = User::get();
        return view('test',compact('data'));
    }
    public function create(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return redirect()->route('test');
    }
}
