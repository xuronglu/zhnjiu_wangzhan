<?php

namespace app\admin\controller;

use app\admin\model\Admin as AdminSelect;
use app\BaseController;
use think\facade\Db;
use think\facade\Request;
use think\facade\Session;
use think\facade\View;
use app\admin\model\Custom as dingZhi;

class Custom extends BaseController
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
    //渲染定制页面列表
    public function custom_list()
    {
        $data = dingZhi::order('custom_id desc')->paginate(5);
        $page = $data->render();
        View::assign("page",$page);
        View::assign('data',$data);
        return View::fetch();
    }

    //渲染增加定制页面
    public function custom_add()
    {
        return View::fetch();
    }

    //渲染修改定制页面
    public function edit()
    {
        $id = Request::get("id");
        $data = dingZhi::where('custom_id',$id)->find();
        View::assign('data',$data);
        return View::fetch();
    }

    //提交定制图
    public function custom_action()
    {
        $files = Request::file("photo");
        $savename = \think\facade\Filesystem::disk('public')->putFile( 'upload/dingZhi', $files);
        if($savename){
            $data = dingZhi::create([
                'img'  =>  $savename,
                'create_time' =>  date('Y-m-d h:i:s', time()),
            ]);
            if($data){
                return json(["mas"=>"success","img"=>$savename]);
            }
            return "401";
        }
        return "401";
    }

    //提交修改定制图
    public function custom_edit_action()
    {
        $files = Request::file("photo");
        $id = Request::post("id");

        //删除原来的文件
        $data = dingZhi::where("custom_id",$id)->find()->toArray();
        $img_url = 'storage/'.$data["img"];
        @unlink($img_url);


        //生成新的文件
        $savename = \think\facade\Filesystem::disk('public')->putFile( 'upload/dingZhi', $files);
        $res = Db::name("custom")->where("custom_id",$id)->update(["img"=>$savename]);
        if($res){
            return json(["mas"=>"success","img"=>$savename]);
        }
    }


    //删除
    public function delete_img(){
        $id = Request::post("id");
        $data = dingZhi::where("custom_id",$id)->find()->toArray();
        $img_url = 'storage/'.$data["img"];
        //$pic为文件路径
        $res = @unlink($img_url);
        if($res){
            $sql = dingZhi::where('custom_id',$id);
            $sql->delete();
            if($sql != ''){
                return "200";
            }
        }
        return "500";
    }

}