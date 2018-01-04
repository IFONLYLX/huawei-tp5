<?php
namespace app\index\controller;
use think\Config;
use think\Env;
use think\Request;
use think\Controller;
use think\Db;
use app\index\model\Send;
use app\index\model\UserModel;
use app\admin\model\NewsModel;
use app\admin\model\UploadModel;
use think\Route;
error_reporting(0);
class Index extends Controller
{
//短信验证
	public function sms()
	{
		if(request()->isPost()){
			$Send = new Send;
			$result = $Send->sms([
				'param'  => ['code'=>'123456','product'=>'安德兔'],
				'mobile'  => input('post.mobile/s','','trim,strip_tags'),
				'template'  => 'SMS_12940581',
				]);
			if($result !== true){
				return $this->error($result);
			}
			return $this->success('短信下发成功！');
		}
		return $this->fetch();
	}
//多语言
	public function lang() {
		switch ($_GET['lang']) {
			case 'cn':
			cookie('think_var', 'zh-cn');
			break;
			case 'en':
			cookie('think_var', 'en-us');
			break;
	        //其它语言
		}
	}
//华为商城
//显示列表功能pic_list
	// public function list()
	// {
	// 	$data=UploadModel::paginate(3);
	// 	$page=$data->render();
	// 	$this->assign('data',$data);
	// 	$this->assign('page',$page);
	// 	return $this->fetch('index/frame/pages/pic_list');
	// }
	public function mall(Request $request)
	{
		// $data=UploadModel::paginate(120);
		// $this->assign('data',$data);
		//return $this->fetch('index/frame/pages/pic_list');
		$data=Db::table('upload_model')->where('titleid', 1)->paginate(8);
		$data1=Db::table('upload_model')->where('titleid', 2)->paginate(8);
		$data2=Db::table('upload_model')->where('titleid', 3)->paginate(8);
		$data3=Db::table('upload_model')->where('titleid', 4)->paginate(8);
		$data5=Db::table('upload_model')->where('titleid', 5)->paginate(8);
		$data7=Db::table('upload_model')->where('titleid', 7)->paginate(8);
		$data8=Db::table('upload_model')->where('titleid', 8)->paginate(8);
		
		// $page=$data->render();
		// dump($data);
		// die;
		$this->assign('data',$data);
		$this->assign('data1',$data1);
		$this->assign('data2',$data2);
		$this->assign('data3',$data3);
		$this->assign('data5',$data5);
		$this->assign('data7',$data7);
		$this->assign('data8',$data8);
		
		return $this->fetch('index/mall');
	}

//查找需要修改的id
	public function mall_detall()
	{
		$id=input('get.id');
		$data=UploadModel::get($id);
		$this->assign('data',$data);
		return $this->fetch('index/malldetall');
	}

//首页面
	public function index(Request $request)
	{
		
		return $this->fetch('index/index');
	}
//introduction
	public function introduction(Request $request)
	{
		
		return $this->fetch('index/introduction');
	}
//manage
	public function manage(Request $request)
	{
		
		return $this->fetch('index/manage');
	}
//news
	public function news(Request $request)
	{
		
		$data=Db::table('news_model')->order('create_time desc')->paginate(10);//按照倒序时间显示查询
		$page=$data->render();
		$this->assign('data',$data);
		$this->assign('page',$page);
		return $this->fetch('index/news');
	//	$this->redirect('index/news.php');
	}
	public function newsinfo(Request $request)
	{

		$id=input('get.id');
		$data=Db::table('news_model')->where('id',$id)->find();
		$this->assign('data',$data);
		return $this->fetch('index/newsinfo');
	}


	public function news_list(Request $request)
	{
		$titleid=input('get.title_id');
		
		$data=Db::table('news_model')->order('create_time desc')->where('titleid',$titleid)->select();

		$this->assign('data',$data);
		return $this->fetch('index/news');
	}
//user
	public function user(Request $request)
	{
		
		return $this->fetch('index/user');
	}
	public function userinfo()
	{
		$username=input('get.username');
		$data=Db::table('user_model')->where('username',$username)->find();
		$this->assign('data',$data);
		return $this->fetch('index/userinfo');
	}
	//查找需要修改的id
	public function userinfo_update()
	{
		$id=input('get.id');
		$data=UserModel::get($id);
		$this->assign('data',$data);
		return $this->fetch('index/userinfo_update');
	}
	//修改功能admin_edit
	public function userinfo_edit(){
		$data=input('post.');
		$id=input('post.id');
		$user=new UserModel();
		$res=$user->allowField(true)->save($data,['id'=>$id]);
		if ($res) {
			$this->success('成功修改信息','index/login');
		}else{
			$this->error('错误');
		}
	}
//显示列表功能pic_list
	public function pic_list()
	{
		$data=UploadModel::paginate(3);
		$page=$data->render();
		$this->assign('data',$data);
		$this->assign('page',$page);
		return $this->fetch('index/frame/pages/pic_list');
	}
//login
	public function login()
	{

		return $this->fetch('login/login');
	}
//register
	public function register()
	{
		
		return $this->fetch('login/register');
	}

}
