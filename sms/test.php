<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019\1\12 0012
 * Time: 14:14
 */
require 'vendor/autoload.php';
class Test
{
    public function index()
    {
        $MaiKeSmsObj = new \MaiKe\MaiKeSms();
        $MaiKeSmsObj::aliSms()->config();
    }
}

$testObj = new Test();
$testObj->index();