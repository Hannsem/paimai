<?php

namespace App\Http\Model\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class admin_shops extends Model
{
    protected $table = "admin_shops";
    public $timestamps = false;

    /**商品添加方法
     * 韩金权
     * @param $data
     * @return bool
     */
    function updata($data, $path)
    {


        $data = [
            'name' => $data['name'],
            'money' => $data['money'],
            'imgs' => $path,
            'type' => $data['type'],
            'deposit' => $data['number'],
            'details' => $data['details'],
            'minMoney' => $data['minMoney'],
            'startTime'=> time(),
            'endtime'=> $data['endtime']*3600+time()
        ];
        $lang = DB::table('admin_shops')->insert($data);
        if ($lang) {
            return true;
        } else {
            return false;
        }
    }

    /**分页获取商品
     * 韩金权
     * @param $page
     * @param $limit
     * @return array
     */
    function getData($page, $limit)
    {
        $count = count(admin_shops::get());
        $getData = admin_shops::offset(($page - 1) * $limit)->limit($limit)->get();
        $data = [$count, $getData];
        return $data;
    }

    /**
     * 删除商品
     * 龙云飞
     * @param $id
     * @return int
     */
    public function deleteShop($id)
    {
        $data = DB::table('admin_shops')->where('id', $id)->delete();
        return $data;
    }

    /**
     * 获取商品信息
     * 龙云飞
     * @param $shopId 商品ID
     * @return array
     */
    public function getOriginalData($shopId)
    {
        $data = admin_shops::where('id', $shopId)->get();

        $arr = [];
        if ($data) {
            $arr['type'] = '1';
            $arr['lang'] = 'Success';
            $arr['data'] = $data;
        } else {
            $arr['type'] = '0';
            $arr['lang'] = 'Error';
            $arr['data'] = $data;
        }
        return $arr;
    }

    public function updataCommodity($shopId,$updata)
    {

        $data=DB::table('admin_shops')->where('id',$shopId)->update($updata);
//        $data=admin_shops::where('id',$shopId)->updata($updata);
        return $data;
    }

}
