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

    // 依赖注入
/*
      protected $userTransformer;

      public function __construct(UserTransformer $userTransformer)
    {
        $this->userTransformer = $userTransformer;
    }*/

    public function test () {
        $user = new User;
        $user->test();
        die();
    }
}