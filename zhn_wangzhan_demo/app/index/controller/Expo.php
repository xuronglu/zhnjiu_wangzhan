<?php
namespace app\index\controller;
use app\BaseController;
use app\index\model\Act as activity;
use think\facade\View;
class Expo extends BaseController
{
    public function craft()
    {
        return View::fetch();
    }
    public function wenjing()
    {
        $list = activity::where("status",2)->order('act_id', 'desc')->paginate(6);
        $page = $list->render();
        View::assign("list",$list);
        View::assign("page",$page);
        return View::fetch();
    }
    public function yanjiuyuan()
    {
        $list = activity::where("status",3)->order('act_id', 'desc')->paginate(6);
        $page = $list->render();
        View::assign("list",$list);
        View::assign("page",$page);
        return View::fetch();
    }
}
