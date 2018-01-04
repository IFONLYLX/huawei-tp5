<?php
namespace app\admin\controller;
//use app\admin\controller\Common;
use think\Config;
use think\Env;
use think\Request;
use think\Controller;
use think\Db;
use app\admin\model\AdminModel;
use app\admin\model\UploadModel;
class Upload extends Controller
{	
	public function ajax_upload(){
	 //	print_r($_FILES);
		$file = request()->file('picurl');
		
    // 移动到框架应用根目录/public/uploads/ 目录下
		if($file){

			$info = $file->move(ROOT_PATH . 'public/static/' . DS . 'uploads');
			$picurl=$info->getSaveName();
			   // dump($picurl);

			   // die;
			echo json_encode($picurl);
			return;
			// $data=json_encode($picurl);

			// // return;
			// $this->assign('data',$data);
			// // dump($this);
			// // die;
			// return $this->fetch('admin/pic_upload');

			if($info){

				//return $this->fetch('admin/pic_upload','$picurl');

            // 成功上传后 获取上传信息
            // 输出 jpg
				//echo $info->getExtension()."<br/>";
            // 输出整体路径
			//	echo $info->getSaveName()."<br/>";
            // 输出文件路径
			//	echo $info->getFilename()."<br/>"; 
			}else{
            // 上传失败获取错误信息
				echo $file->getError();
			}


		}
	}

	public function uploads(){
		$data=input('post.');
		$upload=new UploadModel($data);
		$res=$upload->allowField(true)->save();
		if ($res) {
			$this->success('添加成功','upload/pic_list');
		}else{
			$this->error('添加失败');
		}


	}

// 	public function upload(){
// 	 //	print_r($_FILES);
// 		$file = request()->file('picurl');
	
//     // 移动到框架应用根目录/public/uploads/ 目录下
// 		if($file){

// 			$info = $file->move(ROOT_PATH . 'public/static/' . DS . 'uploads');
// 			$picurl=$info->getSaveName();
// 			   // dump($picurl);

// 			   // die;

// 			//return $picurl;

// 			echo json_encode($picurl);
// 			return;
// //return $this->fetch('admin/pic_upload','$picurl');

// 			if($info){

// 				//return $this->fetch('admin/pic_upload','$picurl');

//             // 成功上传后 获取上传信息
//             // 输出 jpg
// 				//echo $info->getExtension()."<br/>";
//             // 输出整体路径
// 			//	echo $info->getSaveName()."<br/>";
//             // 输出文件路径
// 			//	echo $info->getFilename()."<br/>"; 
// 			}else{
//             // 上传失败获取错误信息
// 				echo $file->getError();
// 			}


// 		}
// 	}

	//显示列表功能pic_list
	public function pic_list()
	{
		$data=UploadModel::paginate(5);
		$page=$data->render();
		$this->assign('data',$data);
		$this->assign('page',$page);
		return $this->fetch('index/frame/pages/pic_list');
	}
	//查找需要修改的id
	public function pic_update()
	{
		$id=input('get.id');
		$data=UploadModel::get($id);
		$this->assign('data',$data);
		return $this->fetch('index/frame/pages/pic_update');
	}
	//修改功能news_edit
	public function pic_edit(){
		$data=input('post.');
		$id=input('post.id');
		$upload=new UploadModel();
		$res=$upload->allowField(true)->save($data,['id'=>$id]);
		if ($res) {
			$this->success('成功修改信息','upload/pic_list');
		}else{
			$this->error('错误');
		}
	}

	//删除功能news_delete
	public function pic_delete(){
		$id=input('get.id');
		$data=Db::table('upload_model')->where('id', $id)->select();
		$url=ROOT_PATH . 'public/static/' . DS . 'uploads/'.$data[0]['picurl'];//获取图片路径存储到url
		unlink($url);//删除图片
		$res=UploadModel::destroy($id,true);
		// dump($url);
		// die;
		if ($res) {
			$this->success('删除信息成功','upload/pic_list');
		}else{
			$this->error('错误');
		}
	}


}
