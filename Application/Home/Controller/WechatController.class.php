<?php
namespace Home\Controller;


use EasyWeChat\Foundation\Application;

class WechatController extends WechatBaseController
{
    public function index()
    {
        $app = new Application($this->options);

        $response = $app->server->serve();

        $response->send();
    }
}
