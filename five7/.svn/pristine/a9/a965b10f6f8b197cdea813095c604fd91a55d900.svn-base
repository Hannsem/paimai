<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Admin\admin_shops;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommodityDetails extends Controller
{
    /**商品详情页面
     * 韩金权
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    function index()
    {
        return view('Admin.CommodityDetails');
    }

    /**获取商品的方法
     * 韩金权
     * @return \Illuminate\Http\JsonResponse
     */
    function getData()
    {
        $adminShops = new admin_shops();
        $page = request('page');
        $limit = request('limit');
        $getData = $adminShops->getData($page, $limit);
        $data = [
            'code' => 0,
            'msg' => "",
            'count' => $getData[0],
            'data' => $getData[1]
        ];
        return response()->json($data);
    }

    public function deleteShop()
    {
        $id=request('shopid');
        $deleteShop=new admin_shops();
        $data=$deleteShop->deleteShop($id);
        return $data;
    }
}
