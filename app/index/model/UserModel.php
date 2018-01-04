<?php
namespace app\index\model;
use think\Model;
//use traits\model\SoftDelete;
 //index.php
class UserModel extends MOdel
{
	// use SoftDelete;
	// protected static $deleteTime='delete_time';
	protected $auto = ['username','password','ip'];
	protected function setIpAttr($data){
		return request()->ip();
	}
	protected function setUserNameAttr($data){
		return strtolower($data);
	}
	protected function setPasswordAttr($data){
		return $data;
	}
	public function getSexAttr($data){
		switch ($data) {
			case '1':
			return "男";
			break;
			case '2':
			return "女";
			break;
			default:
			return "未知";
			break;
		}
	}


	
}
