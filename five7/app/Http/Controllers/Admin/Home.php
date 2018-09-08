<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * 后台首页类
 * Class Home
 * 龙云飞 18-8-24 17：19
 * @package App\Http\Controllers\Admin
 */
class Home extends Controller
{
    /**
     * 后台首页页面渲染
     * 龙云飞 18-8-24 17：20
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function index(){

        return view("Admin.Home");
    }
}
