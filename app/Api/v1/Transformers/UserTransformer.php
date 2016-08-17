<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/9
 * Time: 17:07
 */

namespace App\Api\V1\Transformers;
use App\User;

use League\Fractal\TransformerAbstract;


class UserTransformer extends TransformerAbstract
{
    public function transform(User $user)
    {
        return [
            'user_id' => $user['id'],
            'user_name' => $user['name'],
            'user_email' => $user['email']
        ];
    }
    /*
         public function transform($user)
    {
        if($user instanceof User){
            return [
                'user_id' => $user['id'],
                'user_name' => $user['name'],
                'user_email' => $user['email']
            ];
        } else if (isNull($user)){
            return null;
        } else {

        }
    }
     * */
}