<?php
/**
 * Created by PhpStorm.
 * User: guoguo
 * Date: 2018-04-14
 * Time: 9:07
 */

namespace app\index\controller;


class Blog
{
    public function read($id)
    {
        return 'id='.$id;
    }

    public function archive($year, $month='01')
    {
        return 'year='.$year.'&month='.$month;
    }

}