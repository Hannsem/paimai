<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//
//

//Route::get('/',function (){
//    return view('Admin.Login');
//})->name('homeProfile');

/**
 * 后台路由
 * 龙云飞 18-8-24 17：11
 */
//
//Route::get('/', function () {
//    return view('Admin/home');
//});
//Route::get('/', 'Admin\Home@index');
Route::view('/', 'layouts\index');

Route::group(['prefix'=>'/','namespace'=>'Admin'],function (){
    Route::get('index', 'Login@index')->name('adminLogin');//登录 龙云飞
    Route::get('home','Home@index')->name('adminHome');//后台首页  龙云飞
    Route::post('verify','Login@verifyLogin')->name('verifyLogin');
    Route::get('CommodityRelease','CommodityRelease@index')->name('CommodityRelease'); //商品添加页面
    Route::post('CommodityRelease','CommodityRelease@upload')->name('CommodityRelease');//商品添加请求
    Route::delete('CommodityDetails','CommodityDetails@deleteShop')->name('CommodityDelete');//商品删除  lyf
    Route::get('CommodityDetails','CommodityDetails@index')->name('CommodityDetails'); //商品添加页面
    Route::any('getCommodityDetails','CommodityDetails@getData')->name('getCommodityDetails'); //请求商品
    Route::any('getCommodityEdit','CommodityEdit@index')->name('editCommodityDetails');//编辑商品页面 lyf
    Route::post('getOriginalData','CommodityEdit@getOriginalData')->name('getOriginalData');//获取商品原来的数据 lyf
    Route::post('editCommodity','CommodityEdit@updata')->name('updata');//编辑商品提交 lyf
    Route::any('auction','Auction@index')->name('Auction');//拍卖管理页面 lyf



});


/**
 * 前台路由
 * 龙云飞 18-8-24 17：12
 */


Route::get('five7/login','Shop\login@index')->name('five7Login'); //登陆
Route::post('five7/logins','Shop\login@login')->name('five7Logins'); //登陆提交方法

Route::group(['prefix'=>'five7','namespace'=>'Shop','middleware' => 'checklogin'],function (){
    Route::get('/','Home@index')->name('five7Home');//前台首页 龙云飞
    Route::get('Personal','Personal@index')->name('five7Personal'); //个人信息
    Route::get('CommodityDetails','CommodityDetails@index')->name('five7CommodityDetails');//商品详情
    Route::post('getShop','Home@getShop')->name('five7getShop'); //获取商品
    Route::post('isdeposit','CommodityDetails@deposit')->name('five7deposit'); //加钱
});
