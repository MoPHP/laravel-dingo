<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {
    // return View::make('homeManage');
    return redirect('index.html');
    // header("location: ./webapp/index.html");
    // include('./webapp/index.html');
});

/*Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'api/v1'], function () {
  Route::resource('lessons', 'LessonsController');
});*/

/*Route::get('oauth/authorize', ['as' => 'oauth.authorize.get', 'middleware' => ['check-authorization-params', 'auth'], function() {
    $authParams = Authorizer::getAuthCodeRequestParams();

    $formParams = array_except($authParams,'client');

    $formParams['client_id'] = $authParams['client']->getId();

    $formParams['scope'] = implode(config('oauth2.scope_delimiter'), array_map(function ($scope) {
        return $scope->getId();
    }, $authParams['scopes']));

    return view('oauth.authorization-form', ['params' => $formParams, 'client' => $authParams['client']]);
}]);


Route::post('oauth/authorize', ['as' => 'oauth.authorize.post', 'middleware' => ['csrf', 'check-authorization-params', 'auth'], function() {

    $params = Authorizer::getAuthCodeRequestParams();
    $params['user_id'] = Auth::user()->id;
    $redirectUri = '/';

    // If the user has allowed the client to access its data, redirect back to the client with an auth code.
    if (Request::has('approve')) {
        $redirectUri = Authorizer::issueAuthCode('user', $params['user_id'], $params);
    }

    // If the user has denied the client to access its data, redirect back to the client with an error message.
    if (Request::has('deny')) {
        $redirectUri = Authorizer::authCodeRequestDeniedRedirectUri();
    }

    return Redirect::to($redirectUri);
}]);

// Add a route to respond to the access token requests
Route::post('oauth/access_token', function() {
    return Response::json(Authorizer::issueAccessToken());
});*/

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
    $api->group(['namespace' => 'App\Api\V1\Controller', 'middleware' => 'cors'], function ($api) {
        $api->get('user/all', 'UserController@test');
        $api->post('user/login', 'AuthController@authenticate');
        $api->post('user/register', 'AuthController@register');
        // jwt.auth 对应 kernel 中的 jwt.auth
        $api->group(['middleware' => ['jwt.auth']], function ($api) {

            //token
            $api->get('token',          'AuthController@getRefreshToken');
            $api->delete('token',       'AuthController@deleteToken');

            //user
            // $api->get('user',           'AuthController@getAuthenticatedUser');
            $api->get('user',           'UserController@getUsers');
            $api->get('user/{id}',      'UserController@getUserById');

            // lessons
            $api->get('lessons',        'LessonsController@getLessons');
            $api->get('lessons/{id}',   'LessonsController@getLessonById');
        });
    });
});