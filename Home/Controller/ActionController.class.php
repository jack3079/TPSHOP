<?php
/**
 * Author：小鱼
 * QQ:34734852
 * Wechat:34734852
 */
namespace Home\Controller;
use Think\Controller;
use weixin\weixinApi;

class ActionController extends Controller{
    private $table;
    private $where;
    private $order;
    private $expires_time;
    private $access_token;
    function __construct(){
        parent::__construct();
        $this->assign('system',$this->systemInfo());
    }
    protected  function get_access(){
        $access_token_data = file_get_contents('./public/access_token.json');
        $res = json_decode($access_token_data, true);
        $this->expires_time = $res["expires_time"];
        if (time()> ($this->expires_time + 7000)){
        $system = $this->systemInfo();
        $weixin = new weixinApi();
        $access_token=$weixin->get_access_token(trim($system["appid"]), trim($system["appsecret"]));
        $this->access_token = $access_token["access_token"];
        $this->expires_time = time();
        file_put_contents('./public/access_token.json', '{"access_token": "'.$this->access_token.'", "expires_time": '.$this->expires_time.'}');
        }else{
         return $res;   
        }
    }
    protected function data($table,$where,$order){
        $this->table = $table;
        $this->where = $where ? $where : array();
        $this->order = $order ? $order :"";
        $shuju = M($this->table)->where($this->where)->order($this->order)->select();
        return $shuju;
    }
    /* 分页 */
    protected function fenye($table_name,$where=array(),$order='',$assign,$showpage){
        $shuju = M($table_name);
        $count = $shuju->count();
        $page = new \Think\Page($count,20);
        $page->setConfig('theme',"<ul class='pagination'></li><li>%FIRST%</li><li>%UP_PAGE%</li><li>%LINK_PAGE%</li><li>%DOWN_PAGE%</li><li>%END%</li><li><a> %HEADER%  %NOW_PAGE%/%TOTAL_PAGE% 页</a></ul>");
        $show =$page->show();
        $data = $shuju->where($where)->order($order)->limit($page->firstRow.','.$page->listRows)->select();
        $this->assign($assign,$data);
        $this->assign($showpage,$show);
    }
    protected  function systemInfo(){
            $system = M('system');
            $data = $system->find();
            return $data;
    }
   protected function cuowu(){
        $this->display('Public/404');
    }
    public function  _empty(){
        $this->cuowu();
    }
}