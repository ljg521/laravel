<?php
/**
 * Created by PhpStorm.
 * User: guoguo
 * Date: 2018-05-05
 * Time: 11:18
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function req(Request $request){
        dd($request);
    }


    public function add(Request $request){
        dd($request->input("input"));//返回表单中某个具体的元素
        dd($request->all());//返回所有数据
    }
}