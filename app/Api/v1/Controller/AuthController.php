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

use App\Api\V1\Service\UserService;

class AuthController extends BaseController
{
    /*public function __construct(UserTransformer $userTransformer)
    {
        $this->userTransformer = $userTransformer;
        // store和update必须有身份验证
        // $this->middleware('auth.basic', ['only' => ['store', 'update']]);
    }*/

    public function authenticate(Request $request)
    {
        // judge


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

        $userService = new UserService();
        $userModel = $userService->getUserByEmail($credentials['email']);
        if (is_null($userModel)) {
            return response()->json(['error' => 'server error'], 500);
        }
        // print_r($userModel->toArray());die();
        // $user = ((new UserTransformer())->transform($userModel));

        return response()->json([
            'user_id'       => $userModel->user_id,
            'user_name'     => $userModel->user_name,
            'access_token'  => $token,
            'expires_at'    => date(DATE_ISO8601, strtotime("+14 day")),
            'mac_key'       => 'LSg85WJFOM',
            'server_time'   => date(DATE_ISO8601)
        ]);
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



    public function refreshToken($tokenToken = false){
        $token = JWTAuth::getToken();
        if(!$token){
            throw new BadRequestHtttpException('Token not provided');
        }
        try{
            $token = JWTAuth::refresh($token);
        }catch(TokenInvalidException $e){
            throw new AccessDeniedHttpException('The token is invalid');
        }
        if ($tokenToken)return $token;
    }

    public function deleteToken (){
        $this->refreshToken();
    }

    public function getRefreshToken () {
        $token = $this->refreshToken(true);
        return $this->response->withArray(['token'=>$token]);
    }
}