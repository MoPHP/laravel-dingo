<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/8
 * Time: 16:16
 */

namespace App\transformer;


abstract class Transformer
{
    public function transformCollection($items) {
        return array_map([$this, 'transform'], $items);
    }

    public abstract function transform($item);
}