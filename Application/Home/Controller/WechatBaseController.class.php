<?php
namespace Home\Controller;

use Think\Controller;

class WechatBaseController extends Controller
{
    protected $options;

    public function __construct()
    {
        require_once './vendor/autoload.php';
        $this->options = [
            'debug' => true,
            'app_id' => 'wx89547bd8268461dd',
            'secret' => '7fe943d66f24ce0e0d7c152928383826',
            'token' => 'weixin',
            'aes_key' => null,

            'log' => [
                'level' => 'debug',
                'file' => '/home/vagrant/log/easywechat.log'
            ],
        ];
        parent::__construct();
    }
}
