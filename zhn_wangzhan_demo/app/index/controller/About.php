<?php
namespace app\index\controller;
use app\BaseController;
use think\facade\View;
class About extends BaseController
{
    public function index()
    {
        return View::fetch();
    }
    public function strategy()
    {
        return View::fetch();
    }
    public function vision()
    {
        return View::fetch();
    }
}
