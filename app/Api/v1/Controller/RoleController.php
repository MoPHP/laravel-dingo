<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/23
 * Time: 20:15
 */

namespace App\Api\V1\Controller;
use App\Http\Controllers\RoleController as RoleService;



class RoleController extends BaseController
{
    private $roleService;
    public function __construct(RoleService $roleService)
    {
        $this->roleService = $roleService;
    }

    public function createRole()
    {
      $this->roleService->createRole();
    }
}
