<?php
namespace app\admin\controller;

use app\admin\model\Admin as adminSelect;
use app\BaseController;
use think\App;
use think\facade\Request;
use think\facade\View;
use app\admin\model\Act as activity;
use app\admin\model\News as newsList;
use think\facade\Session;

class Act extends BaseController
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
    //新闻
    public function news_list(){
        $data = newsList::order('news_id desc')->paginate(5);
        $page = $data->render();
        View::assign("page",$page);
        View::assign('list',$data);
        return View::fetch();
    }
    //新闻增加
    public function news_add(){
        return View::fetch();
    }
    //添加缩略图
    public function thumbnail(){
        $files = Request::file("file");
        $savename = \think\facade\Filesystem::disk('public')->putFile( 'upload/News', $files);
        if ($savename){
            $data = newsList::create([
                'thumbnail'  =>  $savename,
                'create_time' =>  date('Y-m-d h:i:s', time()),
            ]);
            $id = newsList::where('thumbnail', $savename)->find();
            if($data){
                return json(["status"=>"200","msg"=>"图片上传成功","img"=>$savename,"id"=>$id["news_id"]]);
            }
            return json(["status"=>"401","msg"=>"图片上传失败","img"=>$savename]);
        }
    }
    //上传文章
    public function sub_news(){
        $content = Request::post("content");
        $title = Request::post("title");
        $id = Request::post("id");
        $status = Request::post("status");
        if($status==''){
            return json(["status"=>"400","msg"=>"栏位不能为空"]);
        }
        if($id == '' || $title == '' || $content == ''){
            return json(["status"=>"400","msg"=>"缩略图不能为空"]);
        }
        $data = newsList::where('news_id',$id)
            ->find();
        $data->title     = $title;
        $data->content    = $content;
        $data->field_status    = $status;
        $data->status    = 2;
        $data->save();
        if($data){
            return json(["status"=>"200","msg"=>"文章提交成功"]);
        }
    }
//    删除新闻
    public function news_del(){
        $id = Request::post("id");
        $data = newsList::where("news_id",$id)->find()->toArray();
//        $data=htmlspecialchars($data["content"]);
        $preg = '/<img.*?src=[\"|\']?(.*?)[\"|\']?\s.*?>/i';

        preg_match_all($preg, $data["content"], $imgArr);
        $img_url = 'storage/'.$data["thumbnail"];
        $suoluetu = @unlink($img_url);
        $newImgArr = [];
        for($i=0;$i<count($imgArr[1]);$i++){
            $newImgArr[] = substr($imgArr[1][$i], 1);
        }
//        @unlink($newImgArr);

//        $newImgArr = @unlink($newImgArr);

        foreach ($newImgArr as $k=>$v){
            $newImgArr[$k] = @unlink($v);
        }
        if($suoluetu && $newImgArr){
            $news = newsList::where("news_id",$id)->find();
            $news->delete();
            if($news){
                return json(["status"=>"200","msg"=>"删除成功"]);
            }
        }
        return json(["status"=>"401","msg"=>"删除失败"]);
    }
    //添加文章部分，删除缩略图
    public function del_img(){
        $id = Request::post("id");
        $data = newsList::where("news_id",$id)->find();
        $img_url = 'storage/'.$data["thumbnail"];
        $suoluetu = @unlink($img_url);
        if($suoluetu){
            $res = newsList::where("news_id",$id)->find();
            $res->delete();
            if($res){
                return json(["status"=>"200","msg"=>"删除成功"]);
            }
            return json(["status"=>"401","msg"=>"删除失败"]);
        }
    }
    //上架新闻
    public function online_news(){
        $id = Request::post("id");
        $data = newsList::where("news_id",$id)->find();
        $data->status     = 1;
        $data->save();
        if($data){
            return json(["status"=>"200","msg"=>"上架成功"]);
        }
    }
    //下架新闻
    public function offline_news(){
        $id = Request::post("id");
        $data = newsList::where("news_id",$id)->find();
        $data->status     = 2;
        $data->save();
        if($data){
            return json(["status"=>"200","msg"=>"下架成功"]);
        }
    }
    
    
    
    //品牌资讯管理  渲染列表
    public function brand_news(){
        $data = activity::order('act_id desc')->paginate(5);
        $page = $data->render();
        View::assign("page",$page);
        View::assign('list',$data);
        return View::fetch();
    }
    //品牌资讯管理  渲染添加
    public function brand_news_add(){
        return View::fetch();
    }
    //下拉列表  渲染查询
    public function brand_news_select(){
        $status = Request::post("status");
        if($status==0){
            $data = activity::select();
            return json(["data"=>$data]);
        }
        $data = activity::where("status",$status)->select();
        return json(["data"=>$data]);
    }
    //品牌资讯管理  渲染修改
    public function brand_news_edit(){
        $id = Request::get('id');
        $data = activity::where("act_id",$id)->find();
        View::assign('data',$data);
        return View::fetch();
    }
    //品牌资讯管理  提交修改
    public function brand_news_edit_action(){
        $files = Request::file("photo");
        $id = Request::post("id");
        //删除原来的文件
        $data = activity::where("act_id",$id)->find()->toArray();
        $img_url = 'storage/'.$data["act_img"];
        @unlink($img_url);


        //生成新的文件
        $savename = \think\facade\Filesystem::disk('public')->putFile( 'upload/brandNews', $files);
        $res = activity::where("act_id",$id)->find();
        $res->act_img = $savename;
        $ress = $res->save();
        if($ress){
            return json(["status"=>"200","mas"=>"success","img"=>$savename]);
        }
    }


    //添加品牌资讯 提交图片
    public function brand_news_action(){
        $files = Request::file("photo");
        $savename = \think\facade\Filesystem::disk('public')->putFile( 'upload/brandNews', $files);
        if ($savename){
            $data = activity::create([
                'act_img'  =>  $savename,
                'create_time' =>  date('Y-m-d h:i:s', time()),
                'status' =>  '0',
            ]);
            if($data){
                return json(["status"=>"200","msg"=>"图片上传成功","img"=>$savename]);
            }
            return json(["status"=>"401","msg"=>"图片上传失败","img"=>$savename]);
        }
    }
    //提交
    public function brand_news_sub(){
        $status = Request::post("status");
        $title = Request::post("title");
        $url = Request::post("url");
        $id = Request::post("act_img");
        $data = activity::where("act_img",$id)->find();
        $data->title = $title;
        $data->status = $status;
        $data->act_url = $url;
        $res = $data->save();
        if($res==true){
            return json(["status"=>"200","msg"=>"提交成功"]);
        }
    }


    //提交修改
    public function brand_news_edit_sub(){
        $status = Request::post("status");
        $title = Request::post("title");
        $url = Request::post("url");
        $id = Request::post("id");
        $data = activity::where("act_id",$id)->find();
        $data->title = $title;
        $data->status = $status;
        $data->act_url = $url;
        $res = $data->save();
        if($res==true){
            return json(["status"=>"200","msg"=>"提交成功"]);
        }
    }


    //删除资讯
    public function delete_brand_news(){
        $id = Request::post("id");
        $data = activity::where("act_id",$id)->find()->toArray();
        $img_url = 'storage/'.$data["act_img"];
        //$pic为文件路径
        $res = @unlink($img_url);
        if($res != ''){
            $sql = activity::where('act_id',$id);
            $sql->delete();
            if($sql==true){
                return json(["status"=>"200","msg"=>"删除成功"]);
            }
        }
        
    }
    
    
    // 手动上传资讯
    public function manual_news_add(){
        return View::fetch();
    }
    //手动添加缩略图
    public function manual_thumbnail(){
        $files = Request::file("file");
        $savename = \think\facade\Filesystem::disk('public')->putFile( 'upload/News', $files);
        if ($savename){
            $data = activity::create([
                'act_img'  =>  $savename,
                'create_time' =>  date('Y-m-d h:i:s', time()),
            ]);
            $id = activity::where('act_img', $savename)->find();
            if($data){
                return json(["status"=>"200","msg"=>"图片上传成功","img"=>$savename,"id"=>$id["act_id"]]);
            }
            return json(["status"=>"401","msg"=>"图片上传失败","img"=>$savename]);
        }
    }
    //提交手动上传资讯
    public function sub_manual_news(){
        $content = Request::post("content");
        $title = Request::post("title");
        $id = Request::post("id");
        $select = Request::post("select");
        if($select == ''){
            return json(["status"=>"400","msg"=>"栏位不能为空"]);
        }
        if($id == '' || $title == '' || $content == ''){
            return json(["status"=>"400","msg"=>"缩略图不能为空"]);
        }
        $data = activity::where('news_id',$id)
            ->find();
        $data->title     = $title;
        $data->act_url    = $content;
        $data->status    = $select;
        $data->save();
        if($data){
            return json(["status"=>"200","msg"=>"文章提交成功"]);
        }
    }
}
