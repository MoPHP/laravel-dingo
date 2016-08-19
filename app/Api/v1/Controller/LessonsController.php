<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/8
 * Time: 20:01
 */

namespace App\Api\V1\Controller;


use Response;
use Illuminate\Http\Request;

use App\Api\V1\Service\LessonService;


class LessonsController extends BaseController
{
    private $lessonService;
    public function __construct(LessonService $lessonService)
    {
        $this->lessonService = $lessonService;
    }

    public function getLessons(Request $request)
    {
        $lessons = $this->lessonService->getLessons($request->get('size'), $request->get('page'));

       if (is_null($lessons)) {
            return response()->json(['error' => 'server error'], 500);
        }
        // return $this->collection($lessons, new LessonTransformer(), ['a']);

        return Response::json($lessons);
    }

    public function getLessonById($id)
    {
        $lesson = $this->lessonService->getLessonById($id);
        if (is_null($lesson)) {
            return response()->json(['error' => 'server error'], 500);
        }
        // return $this->item($lesson, new LessonTransformer());
        return Response::json($lesson);
    }
}