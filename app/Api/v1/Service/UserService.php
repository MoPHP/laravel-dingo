<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/16
 * Time: 17:02
 */

namespace App\Api\V1\Service;

use App\User;

class UserService extends  BaseService
{
    function getUserById ($id)
    {
        $user = User::find($id);
        return $user;
    }
}