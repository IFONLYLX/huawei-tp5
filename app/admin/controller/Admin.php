<?php
namespace app\admin\controller;
//use app\admin\controller\Common;
use \org\Upload;
use think\Config;
use think\Env;
use think\Request;
use think\Controller;
use think\Db;
use app\admin\model\AdminModel;
use app\index\model\UserModel;
use app\admin\model\NewsModel;
use app\admin\model\UploadModel;
class Admin extends Controller
{	/*frame框架界面*/
	
	//admin首页

	//请求登录界面
	public function login(){
		return $this->fetch('login/login');
	}
	//用户添加
	public function user_add(){
		$data=input('post.');
		$admin=new  AdminModel($data);
		$res=$admin->allowField(true)->save();
		if ($res) {
			$this->success('添加成功','admin/user_list');
		}else{
			$this->error('添加失败');
		}
	}
	//用户列表
	public function user_list(){
		$data=UserModel::paginate(3);
		$page=$data->render();
		$this->assign('data',$data);
		$this->assign('page',$page);
		return $this->fetch('index/frame/pages/user_list');

	}

	//admin登录功能页面
	public function checklogin(Request $request){

		$data=input('post.');
		$admin=new AdminModel($data);

		$res=$admin->where('name',$data['name'])->find();
		if ($res) {
			if ($res['password']===$data['password']) {
				$value=session('name',$data['name']);

			}else{
				$this->error('密码不正确');
			}
		}else{
			$this->error('用户名不存在');
			exit;
		}
		if (captcha_check($data['code'])) {

			$this->success('验证码正确，登录成功','index/frame');
		}else{
			$this->error('验证码不正确');

		}
	}
	//管理员注销功能logout
	public function logout(){
		session(null);
		$this->success('退出成功',"index/index/index");
	}
	//添加管理员功能admin_add
	public function admin_add()
	{
		$data=input('post.');
		$admin=new  AdminModel($data);
		$result=$admin->where('name',$data['name'])->find();
		if ($result ==null) {
			$res=$admin->allowField(true)->save();
			if ($res) {
				$this->success('添加成功','admin/admin_list');
			}else{
				$this->error('添加失败');
			}
		}else{
			$this->error('添加失败,用户名已经存在');
		}
	}
	//显示列表功能admin_list
	public function admin_list()
	{
		$data=AdminModel::paginate(3);
		$page=$data->render();
		$this->assign('data',$data);
		$this->assign('page',$page);
		return $this->fetch('index/frame/pages/admin_list');
	}
	//查找需要修改的id
	public function admin_update()
	{
		$id=input('get.id');
		$data=AdminModel::get($id);
		$this->assign('data',$data);
		return $this->fetch('index/frame/pages/admin_update');
	}
	//修改功能admin_edit
	public function admin_edit(){
		$data=input('post.');
		$id=input('post.id');
		$admin=new AdminModel();
		$res=$admin->allowField(true)->save($data,['id'=>$id]);
		if ($res) {
			$this->success('成功修改信息','admin/admin_list');
		}else{
			$this->error('错误');
		}
	}

	//删除功能admin_delete
	public function admin_delete(){
		$id=input('get.id');
		$res=AdminModel::destroy($id,true);
		if ($res) {
			$this->success('删除信息成功','admin/admin_list');
		}else{
			$this->error('错误');
		}
	}


}
