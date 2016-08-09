<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/9
 * Time: 16:51
 */

namespace App\Api\V1\Controller;
use App\User;

use App\Api\v1\Transformers\UserTransformer;



class UserController extends BaseController
{

    protected $userTransformer;

    // 依赖注入
/*    public function __construct(UserTransformer $userTransformer)
    {
        $this->userTransformer = $userTransformer;
    }*/

    function getUserByEmail ($email)
    {
        $user = User::where('email', '=', $email)->get();
        if (!$user) {
            return $this->response->errorNotFound('Lesson not found');
        }
        // return $user->toArray();die();

        return $this->item($user->toArray(), new UserTransformer());
    }
}