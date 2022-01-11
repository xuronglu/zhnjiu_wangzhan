<?php
namespace app\admin\controller;

use app\admin\model\Admin as AdminSelect;
use app\BaseController;
use think\facade\View;
use think\facade\Session;

class Index extends BaseController
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
    public function index()
    {
        return View::fetch();
    }
}
