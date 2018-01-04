<?php
namespace app\index\controller;
use think\Config;
use think\Env;
use think\Request;
use think\Controller;
use think\Db;
use app\index\model\UserModel;
class User extends Controller
{
	// public function add(){
	// 	$data=input('post.');
	// 	$user=new UserModel();
	// 	$res=$user->allowField(true)->save();
	// 	if ($res){
	// 		$this->error("成功",'./login/login');

	// 	}else {
	// 		$this->error("失败");
	
	// 	}
	// }
	//请求frame界面user_list

	public function checkselect(Request $request){
		
		$data=input('post.username');
		$user=new UserModel($data);
		$res=$user->where('username',$data['username'])->find();
		if ($res) {
			$this->success('用户名已存在');
		}else{
			$this->error('可以使用');
		}
	}
	public function checklogin(Request $request){
		
		$data=input('post.');
		$user=new UserModel($data);
		$res=$user->where('username',$data['username'])->find();
		if ($res) {
			if ($res['password'] === $data['password']) {
				$value=session('username',$data['username']);
			}else{
				$this->error('密码不正确');
			}
		}else{
			$this->error('用户名不存在');
			exit;
		}
		if (captcha_check($data['code'])) {
			// $this->assign('data',$data);
			// return $this->fetch('index/index');
			$this->success('登录成功','index/index');
		}else{
			$this->error('验证码不正确');
		}
	}

//注销功能logout
	public function logout(){
		session(null);
		$this->success('退出成功',"index/index");
	}

//用户注册
	public function register()
	{
   	    //实例化User
		// $user = new UserModel;
        //接收前端表单提交的数据
		// $user->username = input('post.username');
		// $user->password = input('post.password');
		$data=input('post.');
		$user = new UserModel($data);
		//查找用户名是否存在
		$result=$user->where('username',$data['username'])->find();
		if ($result ==null) {
			//查找用户名不存在
			$res=$user->allowField(true)->save();
  		  //写入数据库
			if ($res) {
				return $this->success('注册成功','index/login');
			} else {
				return $this->success('注册失败');
			}

		}else{
			return $this->success('已注册，请直接登录','index/login');
		}
		//2.不判断用户是否存在
		// $res=$user->allowField(true)->save();
 	   //写入数据库
		// if ($res) {
		// 	return $this->success('注册成功','index/login');
		// } else {
		// 	return $this->success('注册失败');
		// }
	}
}
