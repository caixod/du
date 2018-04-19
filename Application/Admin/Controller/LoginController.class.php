<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){

    	if ($_POST) {
    		$yanzhengma = $_POST['yzm'];
    		if(!$this->check_verify($yanzhengma)){
    			$this->error('验证码错误');
    			exit;
    		}
    		
    		$name = I('post.name');
    		$password = md5(I('post.pwd'));
    		$where['name'] = $name;
    		$where['pwd'] = $password;
    		$res = M('Admin')->where($where)->select();

    		if ($res) {
    			$_SESSION['name'] = $name;
				$this->success('登录成功',U('admin/index/index'));
    		}else{
				$this->error('用户名或密码错误');
    		}

    		exit;
    	}


        $this->display();
    }


    public function quit()
    {
    	session(null);
    	$this->success('退出成功',U('admin/login/index'));
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


    public function mima()
    {
        if ($_POST) {
            $data['pwd'] = md5($_POST['pwd']);
            $res = M('admin')->where('id=1')->save($data);
            if ($res) {
                $this->success('修改成功');
            }else{
                $this->error('修改失败');
            }
        }


        $this->display();
    }





}