<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/8
 * Time: 16:16
 */

namespace App\transformer;


class Transformer
{
    public static function transformCollection($items) {
        return array_map([self, 'transform'], $items);
    }

}