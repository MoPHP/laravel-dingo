<?php namespace App\Http\Controllers;

use App\Page;
//use Illuminate\Support\Facades\Auth;

use Redirect, Input, Auth,View;

class HomeController extends Controller {

    public function index(){
        return View::make('homeManage');
    }

}