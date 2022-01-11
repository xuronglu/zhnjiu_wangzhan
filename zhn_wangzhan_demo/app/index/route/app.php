<?php
namespace app\index\route;
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\facade\Route;
//Route::rule('index', 'index/index/index', 'POST');
// Route::get('think', function () {
//     return '哈哈哈';
// });




//首页
Route::get('index', 'index/index');

//关于紫红泥
Route::get('about', 'About/index');
Route::get('strategy', 'About/strategy');
Route::get('vision', 'About/vision');


//新闻中心
Route::get('news', 'News/index');
//Route::get('vision', 'news/vision');
Route::get('activity', 'News/activity');


//产品中心
Route::get('altar', 'Product/altar');
Route::get('commission', 'Product/commission');
Route::get('product', 'Product/index');
Route::get('product_details', 'Product/product_details');
Route::get('product_details_1', 'Product/product_details_1');
Route::get('product_details_2', 'Product/product_details_2');


//酒之博览
Route::get('expo', 'Expo/craft');
Route::get('wenjing', 'Expo/wenjing');
Route::get('yanjiuyuan', 'Expo/yanjiuyuan');

//会员体系
Route::get('member', 'Member/member');


//加入我们
Route::get('join_us1', 'Join/join_us1');
Route::get('join_us2', 'Join/join_us2');
