<?php

namespace App\Http\Controllers\Shop;

use App\Http\Model\Shop\shop_login;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Login extends Controller
{
    /**
     * 登陆页面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function index(){
        return view('Shop.login');
    }

    /**
     *
     * 登陆提交方法
     * @return array
     */
    public function login(){
        $name=request('name');
        $password=request('password');
        $shop_login=new shop_login();
        $rule=$shop_login->login($name,$password);
        return $rule;
    }
}
