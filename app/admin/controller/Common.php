<?php
namespace app\admin\controller;
use think\Config;
use think\Env;
use think\Request;
use think\Controller;
use think\Db;
use app\admin\model\AdminModel;
class Common extends Controller
{
	public function _initialize()
	{
		if (!session('name')) {
			$this->error('请先登录','admin/login');
		}
	}
	
	
}
