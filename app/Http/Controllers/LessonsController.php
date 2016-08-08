<?php

namespace App\Http\Controllers;

use App\transformer\LessonTransformer;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Lesson;

use Input;

class LessonsController extends ApiController
{
    protected $lessonTransformer;

    // 依赖注入
    public function __construct(LessonTransformer $lessonTransformer)
    {
        $this->lessonTransformer = $lessonTransformer;
        // store和update必须有身份验证
        $this->middleware('auth.basic', ['only' => ['store', 'update']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // 数据库表结构
      // 没有错误信息
      $lessons = Lesson::all();
      return $this->response([
        'status' => 'success',
        'data' => $this->lessonTransformer->transformCollection($lessons->toArray())
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // echo json_encode($_POST);die();
        // echo json_encode(Input::all());die();
        if (!(input::get('title') && input::get('body'))){
            return $this->setStatusCode(422)->responseError('validate fails');
        }
        // 必须先设置     protected $fillable = ['title', 'body'];
        Lesson::create(Input::all());
        return $this->setStatusCode(201)->response([
            'status' => 'success',
            'message' => 'lesson created'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lesson = Lesson::find($id);
        if (! $lesson) {
            return $this->responseNotFound();
        }
        return $this->response([
          'status' => 'success',
          'data' => $this->lessonTransformer->transform($lesson)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
