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
}
