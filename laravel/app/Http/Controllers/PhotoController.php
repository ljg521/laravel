<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    //
    public function index(){
        return "photo index";
    }

    public function show($id){
        return "photo show id=".$id;
    }

}
