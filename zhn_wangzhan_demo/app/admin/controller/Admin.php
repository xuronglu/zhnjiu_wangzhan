<?php
namespace app\admin\controller;

use app\BaseController;
use think\App;
use think\facade\Request;
use think\facade\View;
use app\admin\model\Admin as adminSelect;
use think\facade\Session;

class Admin extends BaseController
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

    public function admin_list()
    {
        $adminSelect = new adminSelect();
        $admin_list = $adminSelect->select()->toArray();
        View::assign('admin_list',$admin_list);
        return View::fetch();
    }

    //渲染新增管理员页面
    public function admin_add()
    {
        return View::fetch();
    }
    //渲染编辑管理员页面
    public function admin_edit()
    {
        $id = Request::get('admin_id');
        $admin = adminSelect::where('admin_id',$id)->find()->toArray();
        View::assign('admin_fint',$admin);
        return View::fetch();
    }
    //新增管理员执行方法
    public function adminAdd()
    {
//        $data = Request::param();
        $name = Request::post('adminName');
        $password = Request::post('password');
        $admin_add = new adminSelect();
        $admin_add->save([
            'name'  =>  $name,
            'pwd' =>  Md5($password),
            'create_time' => date('Y-m-d h:i:s', time())
        ]);
        if($admin_add){
            return json(['status'=>'ok','mas'=>200]);
        }else{
            return json(['status'=>'ok','mas'=>200]);
        }
    }
    //新增管理员执行方法
    public function adminEdit()
    {
//        $data = Request::param();
        $name = Request::post('adminName');
        $password = Request::post('password');
        $id = Request::post('adminId');
        $admin_edit = adminSelect::where('admin_id',$id)->find();
        $admin_edit->name = $name;
        $admin_edit->pwd = Md5($password);
        $admin = $admin_edit->save();
        if($admin){
            return json(['status'=>'ok','mas'=>200]);
        }else{
            return json(['status'=>'ok','mas'=>200]);
        }
    }
}