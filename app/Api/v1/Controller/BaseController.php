<?php

namespace App\Api\V1\Controller;

use App\Http\Controllers\Controller;
use Dingo\Api\Routing\Helpers;

use App\Plugin\Enum\ErrorMsg;
use App\Plugin\Enum\ErrorCode;

class BaseController extends Controller
{
    use Helpers;

    static public function responseError ($errorType, $httpCode = false)
    {
        $errorMsg = explode('$$', ErrorMsg::$errorType()->getValue());
        $httpCode = $httpCode ? $httpCode : trim($errorMsg[1]);
        return response()->json([
            'code' => $errorType,
            'msg'  => trim($errorMsg[0]),
            'server_time' => date(DATE_ISO8601)
        ], $httpCode);
    }
}