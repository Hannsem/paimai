<?php

namespace App\Http\Controllers\Shop;

use App\Http\Model\Shop\admin_shops;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class Home
 * 前台首页类
 * 龙云飞 18-8-24 17：21
 * @package App\Http\Controllers\Shop
 */
class Home extends Controller
{
    /**
     * 前台首页页面渲染
     * 龙云飞 18-8-24 17：22
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function index(){
        return view('Shop.Home');
    }

    /**
     * 获取活动中商品
     * @return mixed
     */
    public function getShop(){
        $admin_shops=new admin_shops();
        return $admin_shops->getShop();

    }
}
