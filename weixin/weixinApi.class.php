<?php
/**
 * Author：小鱼
 * QQ:34734852
 * Wechat:34734852
 */
namespace weixin;

use Think\Exception;

class weixinApi{

   //验证TOKEN
    public  function checkApi($token){
        if(!empty($token)){
        $data = array($_GET['timestamp'] ,$_GET['nonce'],$token);
        $signature = $_GET['signature'];
        sort($data);
        $sign = sha1(implode($data));
        return $sign == $signature;
        }else{
            throw new Exception("token不能为空！");
        }
    }
    //CURL发送信息
    public  function http_curl($url,$request='get',$data_type='json',$arr=''){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch, CURLOPT_HEADER,0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);//跳过SSL证书检查
        if($request == 'post'){
            curl_setopt($ch, CURLOPT_POST,1);
            curl_setopt($ch, CURLOPT_POSTFIELDS,$arr);
        }
        $res = curl_exec($ch);
        curl_close($ch);
        if(curl_error($ch)){
            throw new Exception('请求发生错误：' .curl_error($ch));
        }
        
        if($data_type=='json'){
            return json_decode($res,true);
        }else{
        return $res;
            }
    }
    //获取access_token
    public  function get_access_token($appid,$appsecret){
        $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$appid&secret=$appsecret";
        return $this->http_curl($url,'','json','');
    }
    //获取微信服务器IP地址
    public function wechatIp($ACCESS_TOKEN){
        $url = "https://api.weixin.qq.com/cgi-bin/getcallbackip?access_token=$ACCESS_TOKEN";
        return $this->http_curl($url,'','json','');
    }
}