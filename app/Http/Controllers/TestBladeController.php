<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestBladeController extends Controller
{
    //
    public  function  test(){
        return view('layouts.test');
    }

    public  function  blade(){
        return view('child');
    }
}
