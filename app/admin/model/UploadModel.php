<?php
namespace app\admin\model;
use think\Model;
//use traits\model\SoftDelete;
 //index.php
class UploadModel extends MOdel
{
	//date("Y-m-d",strtotime($row['dateaddtime']));
	//use SoftDelete;
	//protected static $deleteTime='delete_time';
	protected $auto = ['title','titleid','content','description','picurl'];
	protected function setTitleAttr($data){
		return strtolower($data);
	}
	protected function setTitleidAttr($data){
		return strtolower($data);
	}
	protected function setContentAttr($data){
		return $data;
	}
	protected function setDescriptionAttr($data){
		return $data;
	}
	protected function setPicurlAttr($data){
		return $data;
	}

}
