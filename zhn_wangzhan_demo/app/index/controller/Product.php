<?php
namespace app\index\controller;
use app\BaseController;
use think\facade\View;
use app\index\model\Custom as dingZhi;
class Product extends BaseController
{
    public function index()
    {
        return View::fetch();
    }
    public function altar()
    {
        return View::fetch();
    }
    public function commission()
    {
        $list = dingZhi::order('custom_id', 'desc')->paginate(6);
        $page = $list->render();
        View::assign("list",$list);
        View::assign('page',$page);
        return View::fetch();
    }
    public function product_details()
    {
        return View::fetch();
    }
    public function product_details_1()
    {
        return View::fetch();
    }
    public function product_details_2()
    {
        return View::fetch();
    }
}
