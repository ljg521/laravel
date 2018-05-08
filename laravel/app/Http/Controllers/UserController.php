<?php
/**
 * Created by PhpStorm.
 * User: guoguo
 * Date: 2018-05-05
 * Time: 8:16
 */

namespace App\Http\Controllers;


use App\User;

class UserController extends Controller
{
    public function index()
    {
        return 123;
    }
    public function update(){
//        $user=User::where(['id'=>1])->first();
//        $user->name="神奇的果果";
//        $user->save();
        User::where(['id'=>1])->update(["name"=>"神奇的果果"]);

    }
}