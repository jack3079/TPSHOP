<?php 
/**
 * Author：小鱼
 * QQ:34734852
 * Wechat:34734852
 */
namespace Manage\Controller;
use Think\Controller;
class AdminController extends ActionController{
    public function Index(){
        $this->assign('admin',$this->admin_data());
        $this->display();
    }
     private function admin_data($where=null){
        if(!empty($where)){
        $admin = M('admin')->where($where)->select();
        }else{
        $admin = M('admin')->select();
        }
        return $admin;
    }
    public function add_Admin(){
        $this->display();
    }
    public function save_admin(){
        $user = I('post.username','','strip_tags');
        $pass = md5(trim($_POST['password']));
        $where =array(
            'username' => $user
        );
        if($this->admin_data($where)==null){
            $data = M('admin');
            $data->username = $user;
            $data->password = $pass;
            $data->last_ip = get_client_ip();
            $data->last_time = time();
            if($data->add()){
                $this->success('添加成功！',U('Admin/index'));
            }else{
                $this->success('添加失败！');
            }
        }else{
            $this->error('您要添加的管理员用户名已存在，请选用其他用户名！');
        }
    }
    public function editAdmin(){
        $id=array('id' => I('get.admin_id','','strip_tags'));
        if(!empty($_REQUEST['admin_id']) && $this->admin_data($id)!=null){

        $this->assign('admin_info',$this->admin_data($id));
        $this->display();
        }else{
            $this->error('非法操作');
        }
    }
    public function save_edit(){
        $data = M('admin');
        $data->username = I('post.username','','strip_tags');
        $data->password = md5(trim($_POST['password']));
        $data->last_ip = get_client_ip();
        $data->last_time = time();
        $where = array(
            'id' => I('post.id','','strip_tags')
        );
        if($data->where($where)->save()){
            $this->success('修改成功！',U('Admin/index'));
        }else{
            $this->error('修改失败！');
        }
    }
    public function delAdmin(){
        $id = I('get.admin_id','','trim');
        $session_data = session('admin');
        $session_id = $session_data['id'];
        if($id == $session_id){
            $this->error('不能删除当前管理员账户！');
        }else{
            if(!empty($id) && $this->admin_data("id = $id")!=null){
                if($this->del('admin', $id)){
                    $this->success('删除成功！',U('Admin/index'));
                }else{
                    $this->error('删除失败！');
                }
            }else{
                $this->error('非法操作');
            }            
        }

    }
}