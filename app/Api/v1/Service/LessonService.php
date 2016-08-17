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
        $lessons = Lesson::all();
        // 返回数据判断， true后进行数据重新组装成给用户查看的json数据
        /*
        {
          count: 2,
           items:[
             {}.
             {}
           ]
        }
        */
        return $lessons;
    }

    public function show($id)
    {
        $lesson =  Lesson::find($id);
        return $lesson;
    }

}