<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/9
 * Time: 17:12
 */

namespace App\transformer;

use App\User;

class UserTransformer extends Transformer
{
    public static function transform($user) {
        return [
            'user_id' => $user['id'],
            'user_name' => $user['name'],
            'user_email' => $user['email']
        ];
    }
}