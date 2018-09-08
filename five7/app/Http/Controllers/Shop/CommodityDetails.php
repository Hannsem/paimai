<?php

namespace App\Http\Controllers\Shop;

use App\Http\Model\Shop\admin_shops;
use App\Http\Model\Shop\shops_auction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CommodityDetails extends Controller
{
    /**
     * 商品详情页面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function index(){
        $admin_shops=new admin_shops();
        $shops_auction=new shops_auction();
        $getmessagr=$shops_auction->getMessage(request('sid')); //该商品出价的用户
        $details=($admin_shops->getShopid(request('sid')))[0]; //商品信息
//        $uid=request()->session()->get('user'); //登陆用户id
        $uid=(request()->session()->get('user'))[0]['id'];
        $isdeposit=$shops_auction->isDeposit($uid,request('sid')); //判断用户是否缴纳押金
        return view('Shop.CommodityDetails',compact('details','getmessagr','isdeposit'));
    }

    /**
     *
     * 用户缴纳押金或者加价
     * @return array
     */
    public function deposit(){
        $shops_auction= new shops_auction();
        $deposit=request('deposit');
//        $uid=request()->session()->get('user');
        $uid=(request()->session()->get('user'))[0]['id'];
        $money=request('money');
        $sid=request('sid');
        if ($deposit == 'undefined'){
            $paymoney=$shops_auction->payMoney($sid,$money,$uid);  //竞拍进入条件
            return $paymoney;
        }else{
            $paydeposit=$shops_auction->payDeposit($uid,$sid,$deposit);  //缴纳押金进入条件
            return $paydeposit;
        }
    }
}
