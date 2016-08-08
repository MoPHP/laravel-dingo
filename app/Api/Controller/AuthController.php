<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/8
 * Time: 20:29
 */

namespace App\Api\Controller;

use Illuminate\Http\Request;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

use App\User;

class AuthController extends BaseController
{
    public function authenticate(Request $request)
    {
        // grab credentials from the request
        $credentials = $request->only('email', 'password');
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
        return response()->json(compact('token'));
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
            'password'=>bcrypt($request->get('password'))
        ];
        $user = User::create($newUser);
        // 生成token
        $token = JWTAuth::fromUser($user);
        return response()->json(compact('token'));
    }
}