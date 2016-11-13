<?php
/**
 * Author：小鱼
 * QQ:34734852
 * Wechat:34734852
 */
namespace Manage\Controller;
use Think\Controller;
use weixin\weixinApi;

class ApiController extends Controller{
    //公众号接口
    public function wechatApi(){
        $system = $this->systemInfo();
        $weixin =  new weixinApi();
        if($weixin->checkApi($system["token"]) && $_GET["echostr"]){
            ob_clean();
            echo $_GET["echostr"];
            exit();
        }else{
            $msg = M('message')->where('info_type = 1')->find();
            $this->responseMsg($msg["createtime"], $msg['msg_type'], $msg["msg_info"],$msg['info_type'],'');
        }
    }
    //关注消息推送模板
    protected  function responseMsg($Time,$msgType,$Content,$info_type=0,$keyword=array(),$ArticleCount='',$Title='',$Description='',$PicUrl='',$Url=''){
        $postStr= $GLOBALS ["HTTP_RAW_POST_DATA"];
        $xmlObj = simplexml_load_string($postStr);
        if ($msgType == 'text'){
            $tpl = "<xml>
    			<ToUserName><![CDATA[%s]]></ToUserName>
    			<FromUserName><![CDATA[%s]]></FromUserName>
    			<CreateTime>%s</CreateTime>
    			<MsgType><![CDATA[%s]]></MsgType>
    			<Content><![CDATA[%s]]></Content>
    			</xml>";
        }
        if ($msgType == 'news'){
            $tpl= "<xml>
                    <ToUserName><![CDATA[%s]]></ToUserName>
                    <FromUserName><![CDATA[%s]]></FromUserName>
                    <CreateTime>%s</CreateTime>
                    <MsgType><![CDATA[%s]]></MsgType>
                    <ArticleCount>%s</ArticleCount>
                    <Articles>
                    <item>
                    <Title><![CDATA[%s]]></Title>
                    <Description><![CDATA[%s1]]></Description>
                    <PicUrl><![CDATA[%s]]></PicUrl>
                    <Url><![CDATA[%s]]></Url>
                    </item>
                    </Articles>
                    </xml>";
        }

        if($info_type==1){
            if($xmlObj->MsgType == 'event'){
                if($xmlObj->Event == 'subscribe'){
                    if ($msgType == 'news'){
                        $info = sprintf($tpl,$xmlObj->FromUserName,$xmlObj->ToUserName,$Time,$msgType,$ArticleCount,$Title,$Description,$PicUrl,$Url);
                        echo $info;                        
                    }else {
                        $info = sprintf($tpl,$xmlObj->FromUserName,$xmlObj->ToUserName,$Time,$msgType,$Content);
                        echo $info;
                    }

                }
            }else{
                if($xmlObj->MsgType == $msgType){
                    if(Trim($xmlObj->Content) == Trim($keyword)){
                    if ($msgType == 'news'){
                        $info = sprintf($tpl,$xmlObj->FromUserName,$xmlObj->ToUserName,$Time,$msgType,$ArticleCount,$Title,$Description,$PicUrl,$Url);
                        echo $info;                        
                    }else {
                        $info = sprintf($tpl,$xmlObj->FromUserName,$xmlObj->ToUserName,$Time,$msgType,$Content);
                        echo $info;
                    }
                    }
                }
            }
        }
         
    }
    //获取微信Access_Token
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
            if($access_token["errcode"]==40013){
                echo "AppID无效错误!";
            }
            file_put_contents('./public/access_token.json', '{"access_token": "'.$this->access_token.'", "expires_time": '.$this->expires_time.'}');
        }else{
            return $res;
        }
    }
    protected  function systemInfo(){
        $system = M('system');
        $data = $system->find();
        return $data;
    }
}