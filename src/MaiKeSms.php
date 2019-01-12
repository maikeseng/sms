<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019\1\12 0012
 * Time: 14:01
 */

namespace MaiKe;


use MaiKe\ali\AliSms;

class MaiKeSms
{
    /**
     * 阿里短信接口
     */
    public static function aliSms()
    {
        return new AliSms();
    }

    /**
     * 腾讯短信接口
     */
    public static function tencentSms()
    {

    }

    /**
     * 百度短信接口
     */
    public static function baiduSms()
    {

    }

}