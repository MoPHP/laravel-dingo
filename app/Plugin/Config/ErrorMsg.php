<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/18
 * Time: 14:41
 */

namespace App\Plugin\Config;


class ErrorMsg
{
    // ARGUMENT
    private $REQUIRE_ARGUMENT              = ['code'=>400, 'message' =>'缺少参数'];
    private $INVALID_ARGUMENT              = ['code'=>400, 'message' => ' 无效参数(格式不对,长度过长或过短等)'];

    public function __construct()
    {

    }

    public function __get($name)
    {

    }
}