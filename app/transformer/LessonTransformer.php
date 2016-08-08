<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/8
 * Time: 16:19
 */

namespace App\transformer;


class LessonTransformer extends Transformer
{
    public function transform($lessons) {
        return [
            'title' => $lessons['title'],
            'content' => $lessons['body'],
            'is_free' => (boolean) $lessons['free']
        ];
    }
}