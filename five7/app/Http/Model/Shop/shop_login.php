<?php

namespace App\Http\Model\Shop;

use Illuminate\Database\Eloquent\Model;

class shop_login extends Model
{
    protected $table = "shop_login";
    public $timestamps = false;


    /**
     * 登陆注册方法
     * 有账号正常登陆，无账号则自动注册登陆
     * @param $name
     * @param $password
     * @return array
     */
    function login($name,$password){
        $names=shop_login::where('name',$name)->get();
        if (count($names)>=1){
           $rule= shop_login::where(['name'=>$name,'pass'=>$password])->get();
           if (count($rule)==1){
//               request()->session()->put('user',$rule);
               session(['user'=>$rule]);
               return $data=[
                   'lang'=>1,
                   'msg'=>'登陆成功'
               ];
           }else{
               return $data=[
                   'lang'=>0,
                   'msg'=>'登陆失败，请检查密码'
               ];;
            }
        }else{
            $login=shop_login::insertGetId(['name'=>$name,'pass'=>$password]);
            if ($login){
                $rule= shop_login::where('id',$login)->get();
                session(['user'=>$rule]);
                return $data=[
                    'lang'=>1,
                    'msg'=>'成功注册，自动登陆中'
                ];;
            }else{
                return $data=[
                    'lang'=>0,
                    'msg'=>'网络超时'
                ];;
            }
        }
    }
}
