<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/9
 * Time: 16:51
 */

namespace App\Api\V1\Controller;

// use Illuminate\Support\Facades\Request;
use Response;
use Illuminate\Http\Request;
// use Request;
use Input;

use App\Api\V1\Service\UserService;

use App\Plugin\Enum\ErrorMsg;

class UserController extends BaseController
{
    // 依赖注入
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function getUsers(Request $request)
    {
       // print_r($request->get('size'));die();
        $lessons = $this->userService->getUsers($request->get('size'), $request->get('page'));
        return Response::json($lessons);
    }

    public function getUserById($id)
    {
        $lesson = $this->userService->getUserById($id);
        if (is_null($lesson)) {
            return response()->json(['error' => 'server error'], 500);
        }
        // return $this->item($lesson, new LessonTransformer());
        return Response::json($lesson);
    }
}