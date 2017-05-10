<?php
namespace Home\Controller;


use EasyWeChat\Foundation\Application;

class WechatController extends WechatBaseController
{
    public function index()
    {
        $app = new Application($this->options);

        $server = $app->server;

        $server->setMessageHandler(function ($message)
        {
            return '您好，欢迎关注';
        });

        $response = $server->serve();

        $response->send();
    }
}
