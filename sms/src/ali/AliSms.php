<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019\1\12 0012
 * Time: 14:08
 */
namespace MaiKe\ali;

class AliSms
{
    public function config($config = [])
    {
        echo "ali短信配置方法";
        print_r($config);
    }

    public function send($msg = [])
    {
        echo "发送的信息";
    }
}