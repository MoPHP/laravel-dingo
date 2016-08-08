<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Lesson;


class LessonsController extends Controller
{
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
      return \Response::json([
        'status' => 'success',
        'status_code' => 200,
        'data' => $this->transformCollection($lessons)
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lesson = Lesson::findOrFail($id);
        return \Response::json([
          'status' => 'success',
          'status_code' => 200,
          'data' => $this->transform($lesson)
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

    private function transformCollection($lessons) {
      return array_map([$this, 'transform'], $lessons->toArray());
    }

    private function transform($lessons) {
      return [
        'title' => $lessons['title'],
        'content' => $lessons['body'],
        'is_free' => (boolean) $lessons['free']
      ];
    }
}
