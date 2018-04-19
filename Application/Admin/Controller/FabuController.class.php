<?php
namespace Admin\Controller;
use Think\Controller;
class FabuController extends Controller {
    public function index(){
    	$user = M('book')->select();
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

    	if ($_POST) {

    		$data = $_POST;
    		$where['id'] = $_GET['id'];
    		$res = M('book')->where($where)->save($data);

    		if ($res === false) {
    			$this->error('编辑失败');
    		}else{
    			$this->success('编辑成功');
    		}
    		exit;
    	}
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




}