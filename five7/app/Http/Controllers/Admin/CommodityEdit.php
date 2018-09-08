<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Admin\admin_shops;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommodityEdit extends Controller
{
    public function index()
    {
        $id = request("id");
        return view('Admin.CommodityEdit')->with('id', $id);
    }

    public function getOriginalData()
    {
        $obj = new admin_shops();
        $shopId = request("shop_id");
        $data = $obj->getOriginalData($shopId);
        return $data;
    }

    public function updata()
    {
        $obj = new admin_shops();
        $shopId=request('shopid');
        $updata=[
            'name'=>request('name'),
            'money'=>request('money'),
            'details'=>request('details'),
            'minmoney'=>request('minmoney'),
            'deposit'=>request('deposit'),
            'endtime'=>request('endtime')*3600+time(),
            'starttime'=>time()
        ];
        $data=$obj->updataCommodity($shopId,$updata);
        return $data;

    }
}
