<?php

namespace App\Api\V1\Controller;

use App\Http\Controllers\Controller;
use Dingo\Api\Routing\Helpers;

use App\Plugin\Enum\ErrorMsg;
use App\Plugin\Enum\ErrorCode;

class BaseController extends Controller
{
    use Helpers;

    public function responseError ($errorType)
    {
        $errorMsg = ErrorMsg::$errorType();
        $errorCode = ErrorCode::$errorType();
        return response()->json([
            'code' => $errorType,
            'msg'  => $errorMsg->getValue(),
            'server_time' => date(DATE_ISO8601)
        ], $errorCode->getValue());
    }
}