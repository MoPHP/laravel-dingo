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
    public function getPostById($id){
        $post = Post::findOrFail($id);
        \Auth::loginUsingId(8); // 以uid的为8的登录
        $this->authorize('update', $post);
/*        if(Gate::denies('show-post', $post)){
            abort(403, 'sorry');
        }*/

        return $post->title;
    }
}