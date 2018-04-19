<?php
namespace Admin\Controller;
use Think\Controller;
use Admin\Controller\BaseController;
class UploadController extends BaseController {
    public function index(){
    	$user = M('upload')->find();
    	$this->assign('user',$user);

        $this->display();
    }

    public function create(){

        if ($_POST) {

            $data = $_POST;
            $res = M('book')->add($data);

            if ($res) {
                $this->success('创建成功');
            }else{
                $this->error('创建失败');
            }
            exit;
        }
        // $where['id'] = $_GET['id'];
        // $user = M('book')->where($where)->find();
        // $this->assign('user',$user);
        $this->display();
    }


    public function edit(){

    	$where['id'] = $_GET['id'];
    	$user = M('book')->where($where)->find();
    	$this->assign('user',$user);
        $this->display();
    }

    public function delete(){

    	$id = $_POST['id'];
    	$where['id'] = $id;
    	$res = M('book')->where($where)->delete();

    		if ($res) {
    			$this->error('删除成功');
    		}else{
    			$this->success('删除失败');
    		}
    }



	public function upload(){

        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize = 3145728;// 设置附件上传大小
        // $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath = 'Public/'; // 设置附件上传根目录
        // $upload->rootPath  = "/Public";
        $upload->savePath = "Uploads/"; // 设置附件上传根目录


	    // 上传文件 
	    $info   =   $upload->upload();
	    $data['zhutu'] = '/Public/'.$info['photo']['savepath'].$info['photo']['savename'];
	    M('upload')->where('id = 1')->save($data);
	    if(!$info) {// 上传错误提示错误信息
	        $this->error($upload->getError());
	    }else{// 上传成功
	        $this->success('上传成功！');
	    }
	}


	public function jcupload(){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize = 3145728;// 设置附件上传大小
        // $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath = 'Public/'; // 设置附件上传根目录
        // $upload->rootPath  = "/Public";
        $upload->savePath = "Uploads/"; // 设置附件上传根目录


	    // 上传文件 
	    $info   =   $upload->upload();
	    $data['jc'] = '/Public/'.$info['photo']['savepath'].$info['photo']['savename'];
	    M('upload')->where('id = 1')->save($data);
	    if(!$info) {// 上传错误提示错误信息
	        $this->error($upload->getError());
	    }else{// 上传成功
	        $this->success('上传成功！');
	    }
	}

	public function rjupload(){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize = 3145728;// 设置附件上传大小
        // $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath = 'Public/'; // 设置附件上传根目录
        // $upload->rootPath  = "/Public";
        $upload->savePath = "Uploads/"; // 设置附件上传根目录


	    // 上传文件 
	    $info   =   $upload->upload();
	    $data['rj'] = '/Public/'.$info['photo']['savepath'].$info['photo']['savename'];
	    M('upload')->where('id = 1')->save($data);
	    if(!$info) {// 上传错误提示错误信息
	        $this->error($upload->getError());
	    }else{// 上传成功
	        $this->success('上传成功！');
	    }
	}

	public function smupload(){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize = 3145728;// 设置附件上传大小
        // $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath = 'Public/'; // 设置附件上传根目录
        // $upload->rootPath  = "/Public";
        $upload->savePath = "Uploads/"; // 设置附件上传根目录


	    // 上传文件 
	    $info   =   $upload->upload();
	    $data['sm'] = '/Public/'.$info['photo']['savepath'].$info['photo']['savename'];
	    M('upload')->where('id = 1')->save($data);
	    if(!$info) {// 上传错误提示错误信息
	        $this->error($upload->getError());
	    }else{// 上传成功
	        $this->success('上传成功！');
	    }
	}

}