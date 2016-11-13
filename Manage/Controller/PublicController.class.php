<?php
/**
 * Author：小鱼
 * QQ:34734852
 * Wechat:34734852
 */
namespace Manage\Controller;
use Think\Controller;

class PublicController extends Controller{
    public function Index(){
        $this->display('Public/404');
    }
    public function login(){
        if (IS_POST) {
            $username = $_POST['Manage_Name'];
            $password = $_POST['Manage_Pwd'];
            $verify = new \Think\Verify();
            $verify_code=$verify->check($_POST['vcode']);
            if($verify_code==false){
                $this->error('验证码输入错误！');
            }
            $admin = M('admin')->where(array('username'=>$username))->find();
            if (!$admin) {
                $this->error('用户名或密码错误!');
            }
            if ($admin['password'] != md5($password)) {
                 $this->error('用户名或密码错误!');
            }
            session('admin', array(
                'id' => $admin['id'],
                'username' => $admin['username'],
                'expire'=>time()+3600
            ));
            M('admin')->where(array('id'=>$admin['id']))->save(array('last_time'=>time(), 'last_ip'=>get_client_ip()));
            $this->success('登录成功！', U('index/index'));
        } else {
            $this->display();
        }
    }
    //生成  验证码 图片的方法
    public function verify() {
        ob_clean();
            $Verify =     new \Think\Verify();
            $Verify->fontSize = 30;
            $Verify->length   = 4;
            $Verify->useNoise = true;
            $Verify->entry();
    }
    //退出登录
    public function logout(){
        session('admin', null);
        session('[destroy]'); 
        $this->success('退出登录成功！', U('Public/login'));
        exit;
    }
    public  function _empty(){
        $this->redirect('Public/index');
    }
}
