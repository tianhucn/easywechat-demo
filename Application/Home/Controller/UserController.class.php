<?php

namespace Home\Controller;


use EasyWeChat\Foundation\Application;
use Home\Lib\MysqlDoctrineCacheDriver;

class UserController extends WechatBaseController
{
    public function index()
    {
        $cacheDriver = new MysqlDoctrineCacheDriver();
        $this->options['cache'] = $cacheDriver;

        $app = new Application($this->options);

        $accessToken = $app->access_token;

        $token = $accessToken->getToken();
        var_dump($token);

        $userService = $app->user;
        $users = $userService->lists();

        $user = $userService->get('oFBEXwAkPD7EYhPyzOIVKHPB2USY');

        var_dump($user);
    }
}