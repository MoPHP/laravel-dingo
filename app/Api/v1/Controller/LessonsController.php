<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/8
 * Time: 20:01
 */

namespace App\Api\V1\Controller;


use App\Lesson;
use App\Api\V1\Transformers\LessonTransformer;
use Response;
use App\Api\V1\Service\LessonService;


class LessonsController extends BaseController
{
    public function index()
    {
        $lessons = (new LessonService())->index();
        if (is_null($lessons)) {
            return response()->json(['error' => 'server error'], 500);
        }
        return $this->collection($lessons, new LessonTransformer());
        // return Response::json($lessons);
    }

    public function show($id)
    {
        $lesson = (new LessonService())->show($id);
        if (is_null($lesson)) {
            return response()->json(['error' => 'server error'], 500);
        }
        return $this->item($lesson, new LessonTransformer());
        // return Response::json($lesson);
    }
}