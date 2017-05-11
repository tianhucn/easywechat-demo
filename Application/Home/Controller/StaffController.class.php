<?php

namespace Home\Controller;


use EasyWeChat\Foundation\Application;

class StaffController extends WechatBaseController
{
    public function index()
    {
        $app = new Application($this->options);

        $staff = $app->staff;

        $staff->create('foo@bar','客服1');

        $staffs = $staff->lists();

        var_dump($staffs);
    }
}