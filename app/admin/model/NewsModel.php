<?php
namespace app\admin\model;
use think\Model;
//use traits\model\SoftDelete;
 //index.php
class NewsModel extends MOdel
{
	//date("Y-m-d",strtotime($row['dateaddtime']));
	//use SoftDelete;
	//protected static $deleteTime='delete_time';
	protected $auto = ['title','titleid','keyword','author','content'];
	protected function setTitleAttr($data){
		return strtolower($data);
	}
	protected function setTitleidAttr($data){
		return strtolower($data);
	}
	protected function setKeywordAttr($data){
		return $data;
	}
	protected function setAuthorAttr($data){
		return $data;
	}
	protected function setContentAttr($data){
		return $data;
	}

}
