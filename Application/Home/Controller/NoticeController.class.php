<?php

namespace Home\Controller;


use EasyWeChat\Foundation\Application;

class NoticeController extends WechatBaseController
{
    public function index()
    {
        $app = new Application($this->options);

        $notice = $app->notice;

        $userId = 'oFBEXwAkPD7EYhPyzOIVKHPB2USY';
        $templateId = 'qQ2fUa9Qq0fN7xVHyrT1nODFHXVZW9LQve0zRoREY98';

        $url = 'https://github.com';

        $data = [
            'name' => '人生经验',
        ];

        $result = $notice->uses($templateId)->withUrl($url)->andData($data)->andReceiver($userId)->send();

        var_dump($result);
    }
}