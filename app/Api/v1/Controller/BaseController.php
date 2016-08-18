<?php

namespace App\Api\V1\Controller;

use App\Http\Controllers\Controller;
use Dingo\Api\Routing\Helpers;

use App\plugin\Enum\ErrorMsg;
use App\plugin\Enum\ErrorCode;

class BaseController extends Controller
{
    use Helpers;

    public function responseError ($errorType, $errorCode)
    {

        $errorMsg = new ErrorMsg($errorType);
        return response()->json([
            'code' => $errorMsg->getKey(),
            'msg'  => $errorType,
            'server_time' => date(DATE_ISO8601)
        ], $errorCode);
    }
}