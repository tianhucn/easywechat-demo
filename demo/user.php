<?php
//引入自定义的外置脚本入口文件
include '/var/www/html/joomla/myconfig.php';
//引入composer入口文件
include '/var/www/html/joomla/weixin/vendor/autoload.php';
//引入easywechat主项目的入口类
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
    'oauth' => [
      'scopes'   => ['snsapi_userinfo'],
	//回调地址
      'callback' => '/joomla/weixin/callback.php',
    ],
];
//使用配置初始化一个项目实例
$app = new Application($config);
//从项目实例中得到一个oauth应用实例
$oauth = $app->oauth;
//得到joomla当前用户
$user = JFactory::getUser();
//判断用户登录状态
if (!$user->id) {
	//未登录，引导用户到微信服务器授权
        $oauth->redirect()->send();

}else{
        //已登录状态，重定向到joomla首页
	$targetUrl = 'http://【域名】/joomla/index.php';
	header('location:'. $targetUrl); // 跳转到业务页面
}