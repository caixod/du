<?php
namespace Home\Controller;
use Think\Controller;
class DownloadController extends Controller {
    public function index(){
        if ($_SESSION['name']) {
            $upload = M('upload')->find();
            $this->assign('upload',$upload);

            $list = M('book')->select();
            $this->assign('list',$list);

            $this->display();
        }else{
            $this->redirect('home/login/index');
        }

    }


    public function page()
    {
    	$id = $_GET['id'];
    	$where['id'] = $id;
    	$list = M('book')->where($where)->find();
    	$this->assign('list',$list);
    	$this->assign();
    	$this->display();
    }





}