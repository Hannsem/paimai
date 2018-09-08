<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Admin\admin_shops;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use zgldh\QiniuStorage\QiniuStorage;

class CommodityRelease extends Controller
{
    /**商品发布页面
     * 韩金权
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    function index()
    {
        return view('Admin.CommodityRelease');
    }

    /**商品发布提交方法（图片未处理）
     * 韩金权
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    function upload(Request $request)
    {
        $upData = $request->all();  //获取提交数据
        $file=$request->file('file'); //获取上传的文件
        $disk=QiniuStorage::disk('qiniu'); // 初始化七牛云
        $fileName = md5($file->getClientOriginalName().time().rand()).'.'.$file->getClientOriginalExtension(); //文件名
        $bool = $disk->put('five7/image_'.$fileName,file_get_contents($file->getRealPath()));   //存入七牛云
        $path = $disk->downloadUrl('five7/image_'.$fileName); //返回的七牛云路径

        $rules = [
            'name' => 'required',
            'money' => 'required',
        ];
        $message = [
            'name.required' => '名字不能为空',
            'money.required' => '价格不能为空'
        ];
        $validator = Validator::make($upData, $rules, $message);

        if ($validator->passes() && $bool) {
            $admin_shop = new admin_shops();
            $lang = $admin_shop->updata($upData,$path);
            $data = [
                "code" => 0,
                "msg" => '添加成功',
                "data" => [],
            ];
            if ($lang) {
                return response()->json($data);
            } else {
                return response()->json([
                    "code" => 0,
                    "msg" => "添加失败",
                    "data" => [],
                ]);
            }
        } else {
            $s = '';
            foreach ($validator->errors()->all() as $v) {
                $s .= $v . '</br>';
            };
            $data = [
                "code" => 1,
                "msg" => $s,
                "data" => [],
            ];
            return response()->json($data);
        }

    }
}
