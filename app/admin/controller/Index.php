<?php
namespace app\admin\controller;
use app\admin\controller\Common;
use think\Config;
use think\Env;
use think\Request;
use think\Controller;
use think\Db;
use app\admin\model\AdminModel;
use app\index\model\UserModel;
use app\admin\model\NewsModel;
class Index extends Common
{//请求frame
	public function frame()
	{
		return $this->fetch('index/frame/frame');
	}
	//请求frame界面Index
	public function index()
	{
		return $this->fetch('index/frame/index');
	}
	//请求frame界面top
	public function top()
	{
		return $this->fetch('index/frame/top');
	}
	//请求frame界面pages/index
	public function pages()
	{
		return $this->fetch('index/frame/pages/index');
	}
	
	//admin首页
	// public function index()
	// {
	// 	return $this->fetch('index/index');
	// }
	public function login(){
		return $this->fetch('login/login');
	}
	
	//图片添加
	public function pic_upload(){
		return $this->fetch('index/frame/pages/pic_upload');
	}

	//新闻添加
	public function news_add(){
		return $this->fetch('index/frame/pages/news_add');
	}

	//admin下功能
	public function admin_add(){
		return $this->fetch('index/frame/pages/admin_add');
	}
	//user下功能
	public function user_add(){
		return $this->fetch('index/frame/pages/user_add');
	}
	//图片下功能
	public function pic_add(){
		return $this->fetch('index/frame/pages/pic_upload');
	}



	
}
