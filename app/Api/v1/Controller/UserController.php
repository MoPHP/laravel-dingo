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

    public function index(Request $request)
    {
       // print_r($request->get('size'));die();
        print_r(ErrorMsg::REQUIRE_ARGUMENT1);die();
        print_r($request->get('size'));
        print_r(input::get('size'));die();
        // \App\Http\Requests\Request::capture();
        $lessons = $this->userService->index($request->get('size'), $request->get('page'));
        return Response::json($lessons);
    }

    public function show($id)
    {
        $lesson = $this->userService->show($id);
        if (is_null($lesson)) {
            return response()->json(['error' => 'server error'], 500);
        }
        // return $this->item($lesson, new LessonTransformer());
        return Response::json($lesson);
    }
}