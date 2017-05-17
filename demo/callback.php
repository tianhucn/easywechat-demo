<?php
include '/var/www/html/joomla/myconfig.php';
include '/var/www/html/joomla/weixin/vendor/autoload.php';
use EasyWeChat\Foundation\Application;
//配置参数
$config = [
    'debug'     => true,
    'app_id'    => '【微信公众号appid】',
    'secret'    => '【微信公众号appsecret】',
    'token'     => '【微信公众号自定义token】',
    'log' => [
        'level' => 'debug',
        'file'  => '/tmp/easywechat.log',
    ],
];

$app = new Application($config);
$oauth = $app->oauth;
// 获取 OAuth 授权结果用户信息
$user = $oauth->user();
$user = $user->toArray();
//获得openid
$openid = $user['id'];
//通过openid找到user在joomla系统内的id
//这里应该有一张数据表用来记录joomla内用户的id和openid之间的一一对应关系
//当用户第一次使用微信授权登录时，应该提示用户注册或者绑定已有账号，把用户的openid和用户的在joomla的id写入上述的表中
//当用户第二次通过微信授权登录时，直接通过openid在这张表里查询到用户的id，然后生成joomla的会话
//这里把过程省略..假设得出结果user在系统内的id为270（我joomla的管理员id）
$uid =270; 
$instance = JUser::getInstance();
$instance->load($uid);
$session = JFactory::getSession();
//生成会话
$session->set('user', $instance);
$targetUrl = 'http://【域名】/joomla/index.php';
// 跳转到joomla首页
header('location:'. $targetUrl); 