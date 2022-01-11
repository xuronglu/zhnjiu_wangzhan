<?php

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

Route::get('think', function () {
    return '哈哈哈';
});

//登录
Route::get('login', 'login/login');
// Route::post('toLogin', 'login/to_login');

//欢迎页面
Route::get('welcome', 'welcome/welcome');
//首页
// Route::get('index', 'index/index');

//管理员
Route::get('admin', 'admin/admin_list');
Route::get('admin_add', 'admin/admin_add');
Route::get('admin_edit', 'admin/admin_edit');
Route::post('adminAddAction', 'admin/adminAdd');
Route::post('adminEditAction', 'admin/adminEdit');

//广告图
Route::get('banner_list', 'Banner/banner_list');
Route::get('banner_add', 'Banner/banner_add');
Route::get('edit', 'Banner/edit');
Route::post('bannerAction', 'Banner/banner_action');
Route::post('bannerEditAction', 'Banner/banner_edit_action');
Route::post('bannerDelete', 'Banner/banner_delete');
Route::post('bannerSub', 'Banner/banner_sub');
Route::post('shangXiaJia', 'Banner/shang_xia_jia');
Route::post('deleteImg', 'Banner/delete_img');
Route::post('bannerEditSub', 'Banner/banner_edit_sub');


//新闻
Route::get('news', 'Act/news_list');
Route::get('newsAdd', 'Act/news_add');
Route::get('newsEdit', 'Act/news_edit');
Route::post('subNews', 'Act/sub_news');
Route::post('newsDel', 'Act/news_del');
Route::post('newsEditImg', 'Act/news_edit_img');

//上传文章部分删除缩略图
Route::post('delImg', 'Act/del_img');
//添加新闻缩略图
Route::post('thumbnail', 'Act/thumbnail');
//上架新闻
Route::post('onlineNews', 'Act/online_news');
//下架新闻
Route::post('offlineNews', 'Act/offline_news');




//品牌资讯
Route::get('brandNews', 'Act/brand_news');
Route::get('brandNewsAdd', 'Act/brand_news_add');
Route::get('brandNewsEdit', 'Act/brand_news_edit');
Route::get('manualNewsAdd', 'Act/manual_news_add');
Route::post('brandNewsAction', 'Act/brand_news_action');
Route::post('brandNewsSub', 'Act/brand_news_sub');
Route::post('brandNewsEditSub', 'Act/brand_news_edit_sub');
Route::post('brandNewsSelect', 'Act/brand_news_select');
Route::post('brandNewsEditAction', 'Act/brand_news_edit_action');
Route::post('deleteBrandNews', 'Act/delete_brand_news');
Route::post('subManualNews', 'Act/sub_manual_news');

//定制页面路由
Route::get('customList', 'Custom/custom_list');
Route::get('customAdd', 'Custom/custom_add');
Route::get('customEdit', 'Custom/edit');
Route::post('customAction', 'Custom/custom_action');
Route::post('customDeleteImg', 'Custom/delete_img');
Route::post('customEditAction', 'Custom/custom_edit_action');

