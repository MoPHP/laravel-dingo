<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/8
 * Time: 20:29
 */

namespace App\Api\V1\Controller;

use App\transformer\Transformer;
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
    /*public function __construct(UserTransformer $userTransformer)
    {
        $this->userTransformer = $userTransformer;
        // store和update必须有身份验证
        // $this->middleware('auth.basic', ['only' => ['store', 'update']]);
    }*/

    public function authenticate(Request $request)
    {
        // judge
        if (is_null($request->request) || is_null($request->get('login_name')) || is_null($request->get('password'))) {
           /* return response()->json([
                'code' => 'REQUIRE_ARGUMENT',
                'msg'  => ErrorMsg::REQUIRE_ARGUMENT,
                'server_time' => date(DATE_ISO8601)
            ], ErrorCode::REQUIRE_ARGUMENT);*/
            // return $this->responseError(ErrorMsg::REQUIRE_ARGUMENT, ErrorCode::REQUIRE_ARGUMENT);
            return $this->responseError('REQUIRE_ARGUMENT');
        }

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
                return $this->responseError('LOGIN_FAILURE');
            }
        } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return $this->responseError('INTERNAL_SERVER_ERROR');
        }

        // all good so return the token
        $user = UserTransformer::transform(JWTAuth::authenticate($token)->toArray());
        // print_r($userModel->toArray());die();
        // $user = ((new UserTransformer())->transform($userModel));

        return response()->json([
            'user_id'       => $user['user_id'],
            'user_name'     => $user['user_name'],
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