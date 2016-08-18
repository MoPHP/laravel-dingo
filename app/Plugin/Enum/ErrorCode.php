<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/18
 * Time: 12:59
 */

namespace App\plugin\Enum;

use MyCLabs\Enum\Enum;


class ErrorCode extends  Enum
{
// ARGUMENT
    const REQUIRE_ARGUMENT              = '400';

    const INVALID_ARGUMENT              = '无效参数(格式不对,长度过长或过短等)';

    //
    const PHONE_NUMBER_FORMAT_INVALID   = '手机号码格式不正确';
    const ORG_NOT_EXIST                 = '指定的组织不存在';
    const PHONE_HAS_REGISTER            = '手机号码已经注册过';
    const USER_NOT_EXIST                = '选定的用户不存在';

    // SMS
    const SMS_SEND_FAILURE              = '短信下发失败';
    const SMS_TYPE_INVALID              = '短信验证码类型不正确';
    const SMS_OVER_SUM                  = '发送次数超出上限，每个手机号码一天内最多只允许发送15条短信';
    const SMS_OVER_FREQUENT             = '短信发送太频繁，一分钟内只允许发送一次';

    // area
    const INVALID_COUNTRY_CODE = '国际区号格式不正确,只能以+开头包括+、数字，最长16字符';


    // user
    const ACCOUNT_NOT_EXIST             = '账号不存在';
    const LOGIN_FAILURE                 = '登录失败, 用户名或密码错误';
    const PASSWORD_NOT_CORRECT          = '密码不正确';

    // token
    const UNAUTHORIZED                  = '未授权';
    const AUTH_INVALID_TOKEN            = '无效的授权';
    const AUTH_TOKEN_EXPIRED            = '授权已过期';

    // server
    const INTERNAL_SERVER_ERROR         = '服务故障';
}