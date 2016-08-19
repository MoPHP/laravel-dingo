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
    protected $limit = 20;
    protected $fields = ['id as user_id', 'name as user_name', 'email', 'created_at', 'updated_at'];

    public function getUserById ($id)
    {
        $user =  User::where('id', $id)->get($this->fields)->first();
        return $user;
    }

    public  function getUsers ($size, $page)
    {
        $size = !is_null($size) ? (int)$size : $this->limit;
        $users = User::paginate($size, $this->fields, '', (int)$page);
        return $users;
    }

}