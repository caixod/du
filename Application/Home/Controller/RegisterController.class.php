<?php
namespace Home\Controller;
use Think\Controller;
class RegisterController extends Controller{
    public function index(){

    	if ($_POST) {


            if (empty($_POST['name'])) {
                $this->error('登录名不能为空');
                exit;
            }
            if (empty($_POST['username'])) {
                $this->error('真实姓名不能为空');
                exit;
            }
            if (empty($_POST['password'])) {
                $this->error('密码不能为空');
                exit;
            }
            if (empty($_POST['re_password'])) {
                $this->error('确认密码不能为空');
                exit;
            }
            if ($_POST['re_password']!=$_POST['password']) {
                $this->error('两次输入的密码不一样');
                exit;
            }
            if (empty($_POST['email'])) {
                $this->error('邮箱不能为空');
                exit;
            }



    		$yanzhengma = $_POST['vdcode'];
    		if(!$this->check_verify($yanzhengma)){
    			$this->error('验证码错误');
                exit;
    		}


            $where['name'] = $_POST['name'];
            $where['username'] = $_POST['username'];
    		$user = M('user')->where($where)->select();
    		if($user){
    			$this->error('用户名已存在');
    			exit;
    		}

    		$data = I('post.');
    		$data['password'] = md5($_POST['password']);
    		$res = M('user')->add($data);
    		if ($res) {
    			$this->success('注册成功');
    		}else{
    			$this->error('注册失败');
    		}


    		exit;
    	}

        $this->display();
    }




    public function yanzhengma()
    {
		$config =    array(
		    'fontSize'    =>    30,    // 验证码字体大小
		    'length'      =>    3,     // 验证码位数
		    'useNoise'    =>    false, // 关闭验证码杂点
		);
		$Verify =     new \Think\Verify($config);
		$Verify->entry();
    }



	function check_verify($code, $id = ''){
	    $verify = new \Think\Verify();
	    return $verify->check($code, $id);
	}



}