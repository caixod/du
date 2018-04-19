<?php
namespace Admin\Controller;
use Think\Controller;
use Admin\Controller\BaseController;
class UserController extends BaseController {
    public function index(){

    	$user = M('user')->select();
    	$this->assign('user',$user);
        $this->display();
    }



    public function edit(){

    	if ($_POST) {
    		$data = $_POST;
    		$where['id'] = $_GET['id'];
    		$res = M('user')->where($where)->save($data);

    		if ($res === false) {
    			$this->error('编辑失败');
    		}else{
    			$this->success('编辑成功');
    		}
    		exit;
    	}
    	$where['id'] = $_GET['id'];
    	$user = M('user')->where($where)->find();
    	$this->assign('user',$user);
        $this->display();
    }

    public function delete(){

    	$id = $_POST['id'];
    	$where['id'] = $id;
    	$res = M('User')->where($where)->delete();

    		if ($res) {
    			$this->error('删除成功');
    		}else{
    			$this->success('删除失败');
    		}
    }


}