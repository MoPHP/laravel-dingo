<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/8
 * Time: 20:29
 */

namespace App\Api\V1\Controller;

use Illuminate\Http\Request;
use JWTAuth;

use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;

use App\User;
use Dingo\Api\Facade\API;

use App\transformer\UserTransformer;

class AuthController extends BaseController
{
    public function authenticate(Request $request)
    {
        // grab credentials from the request
        // $credentials = $request->only('email', 'password');
        // 可以自定义前端传递的用户键值和数据库结构不同
        $credentials = [
            'email' => $request->get('login_name'),
            'password' => $request->get('password')
        ];
        try {
            // attempt to verify the credentials and create a token for the user
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 401);
            }
        } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        // all good so return the token
        $user = User::where('email', '=', $credentials['email'])->first()->toArray();
        $user = UserTransformer::transform($user);
        $user['access_token'] = $token;
        $user['expires_at'] = '2016-08-16T16:28:47.848+0800';
        // $user['diff'] = 3223;
        $user['mac_key'] = 'LSg85WJFOM';
        // $user['server_time'] = '2016-08-09T20:57:52.626+0800';
        $user['server_time'] = date('Y-m-d H:i:s',time());
        //获取用户信息
        // $user = JWTAuth::parseToken()->authenticate();
        return response()->json($user);
    }

    public function register(Request $request)
    {
        // 规则判断 validate

        if(!($request->get('email') && $request->get('name') && $request->get('password'))) {
            return response()->json(['error' => 'invalid_credentials'], 401);
        }
        $newUser = [
            'email' => $request->get('email'),
            'name'  => $request->get('name'),
            'password'=> bcrypt($request->get('password'))
        ];
        $user = User::create($newUser);
        // 生成token
        $token = JWTAuth::fromUser($user);
        return response()->json(compact('token'));
    }

    public function getAuthenticatedUser()
    {
        try {

            if (! $user = JWTAuth::parseToken()->authenticate()) {
                return response()->json(['user_not_found'], 404);
            }

        } catch (TokenExpiredException $e) {

            return response()->json(['token_expired'], $e->getStatusCode());

        } catch (TokenInvalidException $e) {

            return response()->json(['token_invalid'], $e->getStatusCode());

        } catch (JWTException $e) {

            return response()->json(['token_absent'], $e->getStatusCode());

        }

        // the token is valid and we have found the user via the sub claim
        return response()->json(UserTransformer::transform($user));
    }

    public function deleteAuthenticatedUser (){

    }

    public function refreshToken(){
        $token = JWTAuth::getToken();
        if(!$token){
            throw new BadRequestHtttpException('Token not provided');
        }
        try{
            $token = JWTAuth::refresh($token);
        }catch(TokenInvalidException $e){
            throw new AccessDeniedHttpException('The token is invalid');
        }
        return $this->response->withArray(['token'=>$token]);
    }
}