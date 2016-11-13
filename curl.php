<?php
/**
 * Author：小鱼
 * QQ:34734852
 * Wechat:34734852
 */
header('Content-Type:text/html;charset=uft-8');
$url="http://www.baidu.com";
//1、初始化CURL
$ch = curl_init();
//2、设置参数,参数$CH初始化对象，$option设置的常量，$VALUE常量的值
//设置请求URL网址
curl_setopt($ch,CURLOPT_URL,$url);
//捕获URL响应信息不输出
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
//设置CURL请求头信息，可不设置
curl_setopt($ch, CURLOPT_HEADER,1);
//开启POST请求
curl_setopt($ch, CURLOPT_POST,1);
//设置传输的$DATA数组的值
$data =  array(
    'txt'=>'hi'
);
//传输CURL参数值，$data变量数组形式
curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
//3、执行CURL,执行后会返回一些信息保存到$INFO
$info = curl_exec($ch);
//4、关闭CURL句柄
curl_close($ch);

//输出返回信息
if($info===FALSE){
    echo 'error:'.curl_error($ch);
}
echo $info;