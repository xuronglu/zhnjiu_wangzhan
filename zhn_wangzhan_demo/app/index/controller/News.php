<?php
namespace app\index\controller;
use app\BaseController;
use app\index\model\Act as activity;
use app\index\model\News as newsList;
use think\facade\View;
use think\Facade\Db;
use think\Request;
class News extends BaseController
{
    public function index()
    {
        $data = newsList::order('news_id desc')->paginate(6);
        $page = $data->render();
        View::assign("page",$page);
        View::assign('list',$data);
        return View::fetch();
    }
    public function details()
    {
        $id = Request::get("id");
        $data = newsList::where("news_id",$id)->find();
        View::assign('list',$data);
        return View::fetch();
    }
    public function activity()
    {
        $list = activity::where("status",1)->order('act_id', 'desc')->paginate(6);
        $page = $list->render();
        View::assign("list",$list);
        View::assign("page",$page);
        return View::fetch();
    }
}
