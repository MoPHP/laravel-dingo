<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/23
 * Time: 20:15
 */

namespace App\Api\V1\Controller;


use App\Post;
use Illuminate\Support\Facades\Gate;

class PostController extends BaseController
{
    public function getPostById($postId){
        $post = Post::findOrFail($postId);
        // $user = \Auth::user();
        // \Auth::loginUsingId($user->id); // 以uid的为 的登录
        $this->authorize('update', $post); // 
        $user = \Auth::user();
        $user->hasRole($permission->roles);
/*        if(Gate::denies('show-post', $post)){
            abort(403, 'sorry');
        }*/

        return $post->title;
    }
}