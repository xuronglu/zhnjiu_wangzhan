<?php
namespace app\index\controller;
use app\BaseController;
use think\facade\View;
class Member extends BaseController
{
    public function member()
    {
        return View::fetch();
    }
}
