<?php
/**
 * Created by PhpStorm.
 * User: guoguo
 * Date: 2018-04-14
 * Time: 10:16
 */
namespace app\index\model;
class Member extends Base
{
    public function search(){
        $data = $this
            ->field('userid,group,truename,mobile')
            ->select();

        return $data;
    }
}