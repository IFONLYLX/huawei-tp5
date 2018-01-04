<?php
namespace app\admin\model;
use think\Model;
//use traits\model\SoftDelete;
 //index.php
class AdminModel extends MOdel
{
	//use SoftDelete;
	//protected static $deleteTime='delete_time';
	protected $auto = ['name','password','ip'];
	protected function setIpAttr($data){
		return request()->ip();
	}
	protected function setNameAttr($data){
		return strtolower($data);
	}
	protected function setPasswordAttr($data){
		return $data;
	}
	// protected $pk = 'id';
	// protected $name = 'name';
	// protected $password = 'password';
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
