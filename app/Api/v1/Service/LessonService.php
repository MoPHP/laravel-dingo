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
    protected $limit = 20;
    //  protected $fields = array('Phones.*','manufacturers.name as manufacturer');
    protected $fields = ['id', 'title', 'body', 'free', 'created_at', 'updated_at'];

    public function index($size , $page)
    {
        $size = !is_null($size) ? (int)$size : $this->limit;
        $lessons = Lesson::paginate($size, $this->fields, '', (int)$page);
        return $lessons;
    }

    public function show($id)
    {
        $lesson =  Lesson::where('id', $id)->get($this->fields)->first();
        return $lesson;
    }

}