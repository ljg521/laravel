<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    public function show(){
        return view('layout.view',["name"=>"果果"]);
    }

    public function template(){
        return view("template.master");
    }
}
