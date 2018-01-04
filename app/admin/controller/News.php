<?php
namespace app\admin\controller;
//use app\admin\controller\Common;
use think\Config;
use think\Env;
use think\Request;
use think\Controller;
use think\Db;
use app\admin\model\AdminModel;
use app\admin\model\NewsModel;
class News extends Controller
{	
	public function news_add(){
		
		$data=input('post.');
		$news=new  NewsModel($data);
		$res=$news->allowField(true)->save();
		if ($res) {
			$this->success('添加成功','news/news_list');
		}else{
			$this->error('添加失败');
		}
	}

	//显示列表功能news_list
	public function news_list()
	{
		$data=NewsModel::paginate(3);
		$page=$data->render();
		$this->assign('data',$data);
		$this->assign('page',$page);
		return $this->fetch('index/frame/pages/news_list');
	}
	//查找需要修改的id
	public function news_update()
	{
		$id=input('get.id');
		$data=NewsModel::get($id);
		$this->assign('data',$data);
		return $this->fetch('index/frame/pages/news_update');
	}
	//修改功能news_edit
	public function news_edit(){
		$data=input('post.');
		$id=input('post.id');
		$news=new NewsModel();
		$res=$news->allowField(true)->save($data,['id'=>$id]);
		if ($res) {
			$this->success('成功修改信息','news/news_list');
		}else{
			$this->error('错误');
		}
	}

	//删除功能news_delete
	public function news_delete(){
		$id=input('get.id');
		$res=NewsModel::destroy($id,true);
		if ($res) {
			$this->success('删除信息成功','news/news_list');
		}else{
			$this->error('错误');
		}
	}

	//查找功能news_select
	// public function news_select(){
	// 	$id=input('get.id');
	// 	$data=NewsModel::get($id);
	// 	$this->assign('data',$data);
	// 	dump($data);
	// 	die;
	// 	//$res=newsModel::destroy($id,true);
	// 	if ($res) {
	// 		$this->success('删除信息成功','news/news_list');
	// 	}else{
	// 		$this->error('错误');
	// 	}

	// }

	public function news_select(){
		$titleid=input('get.titleid');
		$data=Db::table('news_model')->where('titleid' ,'like', $titleid)->paginate(10);
		
		$page=$data->render();
		// dump($data);
		// die;
		$this->assign('data',$data);
		$this->assign('page',$page);
		return $this->fetch('index/frame/pages/news_list');
	}

	public function news_selectext(){
		$title=input('get.title');
		// dump($title);
		// die;
		$data=Db::table('news_model')->where('title' ,'like', $title)->paginate(10);
		
		$page=$data->render();
		$this->assign('data',$data);
		$this->assign('page',$page);
		return $this->fetch('index/frame/pages/news_list');
	}
	

 #$res=Db::table('student')->column('name','password');
        // $res=db('student',[],false)->where([
        //  'id'=>1,

        // ])->select();
        // dump ($res);


}
