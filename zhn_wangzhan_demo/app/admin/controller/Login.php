<?php
namespace app\admin\controller;

use app\BaseController;
use think\facade\Request;
use think\facade\View;
use think\captcha\facade\Captcha;
use app\admin\model\Admin as AdminSelect;
use think\facade\Session;

class Login extends BaseController
{


    protected $admin_id;
    public function __construct()
    {
        $admin = Session::get("admin_id");
        $data = AdminSelect::where("admin_id",$admin)->find();
        $admin_select = empty($data) ? array():$data->toArray();
        if(count($admin_select)>0){
            header("location:/admin.php/index/index");
        }
    }
    public function login()
    {   
        return View::fetch();
    }
    public function demo(){
        $user = Request::post("username");
        $pwd = Request::post("pwd");
        $captcha = Request::post("captcha");
        if(captcha_check($captcha)){
            $data = AdminSelect::where("name",$user)->where("pwd",md5($pwd))->find();
            $res = empty($data) ? array():$data->toArray();
            if(count($res)<1){
                return json(["status"=>'402',"msg"=>"账号账号密码有无，请重新填写！"]);
            }
            Session::set("admin_id",$data["admin_id"]);
            return json(["status"=>'200',"msg"=>"登入成功！"]);
        }
        return json(["status"=>'401',"msg"=>"验证码错误，请重新填写"]);
    }
    public function to_login(){
        return 111;
        // $user = Request::post("username");
        // $pwd = Request::post("pwd");
        // $captcha = Request::post("captcha");
        // if(captcha_check($captcha)){
        //     $data = AdminSelect::where("name",$user)->where("pwd",md5($pwd))->find();
        //     $res = empty($data) ? array():$data->toArray();
        //     if(count($res)<1){
        //         return json(["status"=>'402',"msg"=>"账号账号密码有无，请重新填写！"]);
        //     }
        //     Session::set("admin_id",$data["admin_id"]);
        //     return json(["status"=>'200',"msg"=>"登入成功！"]);
        // }
        // return json(["status"=>'401',"msg"=>"验证码错误，请重新填写"]);
    }
}