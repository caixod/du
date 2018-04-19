<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){

    	if ($_POST) {
    		$yanzhengma = $_POST['vdcode'];
    		if(!$this->check_verify($yanzhengma)){
    			$this->error('验证码错误');
    			exit;
    		}
    		
    		$name = I('post.name');
    		$password = md5(I('post.password'));
    		$where['name'] = $name;
    		$where['password'] = $password;
    		$res = M('User')->where($where)->select();
    		if ($res) {
    			$_SESSION['name'] = $name;
				$this->success('登录成功');
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
    	$this->redirect('home/login/index');
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


            $where['name'] = $_POST['name'];
            $where['email'] = $_POST['email'];
            $res = M('user')->where($where)->select();

            if ($res) {
            
                $pwd = generate_password();
                $data['password'] = md5($pwd);
                M('user')->where($where)->save($data);
                sendMail($_POST['email'],'maxwin6688通知','密码已修改为'.$pwd.'，请妥善保存');
                ob_clean();
                $this->success('邮箱发送成功');

            }else{
                $this->error('用户名或邮箱错误');
            }



            exit;
        }

        $this->display();

    }




}