<?php
/**
 * Created by PhpStorm.
 * User: guoguo
 * Date: 2018-05-05
 * Time: 8:19
 */

namespace App\Http\Controllers;


class CodeController extends Controller
{
    public function show($id)
    {
        return "程序员id=".$id;
    }

    //可选参数url,传值只是在url 可以不填参数
    //但是  控制器中处理该参数的方法,必须确定默认值
    public function par($id=1)
    {
        return "num-id=".$id;
    }

    public function getId(){
        return "用户id";
    }

    public function getName(){
        return "用户名";
    }
}