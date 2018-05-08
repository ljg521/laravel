<?php
/**
 * Created by PhpStorm.
 * User: guoguo
 * Date: 2018-05-03
 * Time: 14:50
 */

namespace App\Http\Controllers;


class Traveller extends Controller
{
    protected $trafficTool;

    public function _construct(Visit $trafficTool)
    {
        $this->trafficTool=$trafficTool;


    }

    public function visitTibet()
    {
        $this->trafficTool->go();
    }

}
//生成依赖的交通工具实例
$trafficTool=new Leg();
//依赖注入的方式解决依赖问题
$tra=new Traveller($trafficTool);
$tra->visitTibet();