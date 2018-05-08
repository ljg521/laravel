<?php
/**
 * Created by PhpStorm.
 * User: guoguo
 * Date: 2018-05-05
 * Time: 9:04
 */

namespace App\Http\Controllers;
/**
 * Class StudentController
 * @package App\Http\Controllers
 *
 * 控制器定义在app\http\controllers
 * 使用命名空间,注意首字母大写  namespace App\Http\Controllers
 * 定义的控制器类必须继承基础控制器Controller
 * 特别注意的:必须先定义好路由
 *
 */

class StudentController extends Controller
{
    public function index()
    {
        return  "hello Student";
    }

    //返回视图
    public function display(){
        //使用返回视图的函数view
        //视图文件存放在resources下的view中
        return view("display");
    }

    //注意新定义的方法需要定义一个对应的路由

    //重定向
    public function red(){

        return redirect("/student");

    }

    public function redToAction(){
        return redirect()->action("StudentController@display");
    }
    //接受路由传递参数
    public function show($id){
        return "studentId=".$id;
    }

    public function redToActionWithPar(){
        return redirect()->action("StudentController@show",['id'=>155]);
    }


}