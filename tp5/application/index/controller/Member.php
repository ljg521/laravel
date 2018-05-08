<?php
/**
 * Created by PhpStorm.
 * User: guoguo
 * Date: 2018-04-14
 * Time: 10:14
 */

namespace app\index\controller;


class Member
{
    public  function lists(){
        $model=model('member');
        $data=$model->search();
        return json_encode($data);
    }
}