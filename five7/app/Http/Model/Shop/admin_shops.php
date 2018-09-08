<?php

namespace App\Http\Model\Shop;

use Illuminate\Database\Eloquent\Model;

class admin_shops extends Model
{
    protected $table = "admin_shops";
    public $timestamps = false;


    /**
     * 获取活动中商品
     * @return mixed
     */
    public function getShop(){
        $time=time();
        return admin_shops::where('starttime','<',$time)->where('endtime','>',$time)->get();
    }

    /**
     * 商品详情获取商品信息
     * @param $id
     * @return mixed
     */
    public function getShopid($id){
        return admin_shops::where('id',$id)->get();
    }

}
