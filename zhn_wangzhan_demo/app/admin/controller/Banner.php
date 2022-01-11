<?php

namespace app\admin\controller;

use app\admin\model\Admin as AdminSelect;
use app\BaseController;
use think\facade\Db;
use think\facade\Request;
use think\facade\Session;
use think\facade\View;
use app\admin\model\Banner as bannerSelect;

class Banner extends BaseController
{
    protected $admin_id;
    public function __construct()
    {
        $admin = Session::get("admin_id");
        $data = AdminSelect::where("admin_id",$admin)->find();
        $admin_select = empty($data) ? array():$data->toArray();
        if(count($admin_select)<1){
            header("location:/admin.php/login/login");
        }else{
            $this->admin_id = $admin;
        }
    }
    //渲染轮播图列表
    public function banner_list()
    {
        $banner = bannerSelect::select()->toArray();
        View::assign("bannerList",$banner);
        return View::fetch();
    }

    //渲染轮播图添加列表
    public function banner_add()
    {
        return View::fetch();
    }

    //添加轮播图
    public function banner_action()
    {
        $files = Request::file("photo");
        $savename = \think\facade\Filesystem::disk('public')->putFile( 'upload/banner', $files);
        if($savename){
            $data = bannerSelect::create([
                'banner_img'  =>  $savename,
                'create_time' =>  date('Y-m-d h:i:s', time()),
                'release_time' =>  date('Y-m-d h:i:s', time()),
                'status' =>  0,
            ]);
            if($data){
                return json(["mas"=>"success","img"=>$savename]);
            }
            return "401";
        }
        return "401";
    }


    //提交轮播图
    public function banner_sub(){
//        $photoFile = Request::post("photoFile");
        $hidden_img = Request::post("hidden_img");
        $url = Request::post("url");
        $data = bannerSelect::where("banner_img",$hidden_img)->find();
        $data->banner_url = $url;
        $res = $data->save();
        if($res){
            return "success";
        }
    }


    //轮播图上架下架
    public function shang_xia_jia(){
        $id = Request::post("id");
        $status = Request::post("status");
        $data = bannerSelect::where('banner_id',$id)->find();
        $data->status = $status;
        $res = $data->save();
        if($res){
            return 'success';
        }
        return '401';
    }

    //修改轮播图
    public function edit(){
        $id = Request::get("id");
        $data = bannerSelect::where("banner_id",$id)->find()->toArray();
        View::assign("data",$data);
        return View::fetch();
    }


    public function banner_edit_action(){
        $files = Request::file("photo");
        $id = Request::post("id");

        //删除原来的文件
        $data = bannerSelect::where("banner_id",$id)->find()->toArray();
        $img_url = 'storage/'.$data["banner_img"];
        @unlink($img_url);


        //生成新的文件
        $savename = \think\facade\Filesystem::disk('public')->putFile( 'upload/banner', $files);
        $res = Db::name("banner")->where("banner_id",$id)->update(["banner_img"=>$savename]);
        if($res){
            return json(["mas"=>"success","img"=>$savename]);
        }
    }

    //删除图片deleteImg
    public function delete_img(){
        if (request()->isPost()) {
            $id = Request::post("id");
            $data = bannerSelect::where("banner_id",$id)->find()->toArray();
            $img_url = 'storage/'.$data["banner_img"];
            //$pic为文件路径
            $res = @unlink($img_url);
            if($res != ''){
                $sql = bannerSelect::where('banner_id',$id);
                $sql->delete();
                if($sql==true){
                    return "200";
                }
            }
            return "500";
        }
    }

    //提交修改banner图
    public function banner_edit_sub(){
        $id = Request::post("id");
        $url = Request::post("url");
        $data = bannerSelect::where('banner_id',$id)->find();
        $data->banner_url     = $url;
        $res = $data->save();
        if($res){
            return "success";
        }
    }
    //添加轮播图
//    public function banner_delete()
//    {
//        $files = Request::file("photo");
//        $savename = \think\facade\Filesystem::disk('public')->putFile( 'upload/banner', $files);
//        if($savename){
//            $data = bannerSelect::create([
//                'banner_img'  =>  $savename,
//                'create_time' =>  date('Y-m-d h:i:s', time()),
//                'release_time' =>  date('Y-m-d h:i:s', time()),
//                'status' =>  0,
//            ]);
//            if($data){
//                return json(["mas"=>"success","img"=>$savename]);
//            }
//            return "401";
//        }
//        return "401";
//
//
//    }
}