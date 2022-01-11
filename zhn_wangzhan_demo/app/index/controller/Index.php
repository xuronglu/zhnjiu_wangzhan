<?php
namespace app\index\controller;
use app\BaseController;
use app\index\model\Banner;
use think\facade\View;
use think\facade\Db;
class Index extends BaseController
{
    public function index()
    {
        $this->record();
        $data = Banner::order('banner_id desc')->select();
        View::assign('data',$data);
        return View::fetch();
    }
    
    //记录首页访问量
    public function record(){
        $data = Db::name('click')->where('id',1)->field('total,id')->find();
        Db::name('click')->where('id',1)->field('total,id')->update(['total'=>$data['total']+1]);
    }
}
