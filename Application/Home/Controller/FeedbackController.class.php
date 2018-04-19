<?php
namespace Home\Controller;
use Think\Controller;
class FeedbackController extends Controller {
    public function index(){

    	if ($_POST) {
    		$data = $_POST;
    		$res = M('feedback')->add($data);

    		if ($res) {
    			$this->success('提交成功');
    		}else{
    			$this->error('提交失败');
    		}


    		exit;
    	}

        $this->display();
    }








}