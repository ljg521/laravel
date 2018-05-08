<?php
namespace app\index\controller;

use think\Controller;
use think\Request;
use think\log;
class Index extends controller
{
//    public function index()
//    {
//        return '<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:) </h1><p> ThinkPHP V5.1<br/><span style="font-size:30px">12载初心不改（2006-2018） - 你值得信赖的PHP框架</span></p></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=64890268" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="eab4b9f840753f8e7"></think>';
//
//
//    }
//
//    public function hello($name = 'ThinkPHP5')
//    {
//        return 'hello,' . $name;
//    }

    /**
     * @var \think\Request Request实例
     */
    protected $request;

    /**
     * 构造方法
     * @param Request $request Request对象
     * @access public
     */
    public function __construct(Request $request)
    {
        parent::__construct();
        $this->request = $request;
    }

    public function index(Request $request)
    {

        echo '<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:) </h1><p> ThinkPHP V5.1<br/><span style="font-size:30px">12载初心不改（2006-2018） - 你值得信赖的PHP框架</span></p></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=64890268" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="eab4b9f840753f8e7"></think>';
        $name = session('name');
        $data=model('member')->search();
        echo $data;
        $this->assign([
                'industry' => 1,
                'capital' => 2,
                'city' => 3,
                'provide' => 4,
                'company' => 5
            ]
        );
        echo '<br/>';
        return view('public/base');
    //    throw new \think\exception\HttpException(404, '异常消息');

    //    Log::record('测试日志信息');
    //    Debug::remark('begin');
      //  echo Debug::getRangeTime('begin','end',6).'s';

        return 'hello,' . $name . '! <br/><a href="/index.php/index/test/demo">点击回到来源地址</a>';
    }


}
