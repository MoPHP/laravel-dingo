<?php

namespace App\Http\Controllers;

use App\Lesson;

class LessonsController extends Controller
{
    protected $limit = 20;
    //  protected $fields = array('Phones.*','manufacturers.name as manufacturer');
    protected $fields = ['id', 'title', 'body', 'free', 'created_at', 'updated_at'];

    public function getLessons($size , $page)
    {
        // print_r(Request::)
        $size = !is_null($size) ? (int)$size : $this->limit;
        $lessons = Lesson::paginate($size, $this->fields, '', (int)$page);
        return $lessons;
    }

    public function getLessonById($id)
    {
        $lesson =  Lesson::where('id', $id)->get($this->fields)->first();
        if (is_null($lesson)) {
            return null;
        }
        // do
        return $lesson;
    }

}
