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

class LessonsController extends BaseController
{
    public function index()
    {
        $lessons = Lesson::all();
        return $this->collection($lessons, new LessonTransformer());
    }

    public function show($id)
    {
        $lesson = Lesson::find($id);
        if (!$lesson) {
            return $this->response->errorNotFound('Lesson not found');
        }
        return $this->item($lesson, new LessonTransformer());
    }
}