<?php

namespace Home\Controller;


use EasyWeChat\Foundation\Application;

class UserController extends WechatBaseController
{
    public function index()
    {
        $app = new Application($this->options);

        $userService = $app->user;
        $users = $userService->lists();

        $user = $userService->get('oFBEXwAkPD7EYhPyzOIVKHPB2USY');

        $userService->remark('oFBEXwAkPD7EYhPyzOIVKHPB2USY','蛤丝');
    }
}