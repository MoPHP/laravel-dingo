<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/9
 * Time: 16:51
 */

namespace App\Api\V1\Controller;

use Response;
use Illuminate\Http\Request;

use App\Api\V1\Service\UserService;


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