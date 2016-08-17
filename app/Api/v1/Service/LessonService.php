<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/17
 * Time: 15:00
 */

namespace App\Api\V1\Service;

use App\Lesson;
use Illuminate\Support\Facades\DB;

class LessonService extends BaseService
{
    public function index()
    {
        $lessons = Lesson::getBasicField()->all();
        // return $this->collection($lessons, new LessonTransformer());
        return $lessons;
    }

    public function show($id)
    {
        $lesson =  Lesson::where('id', $id)->getBasicField()->first();
        return $lesson;
    }

}