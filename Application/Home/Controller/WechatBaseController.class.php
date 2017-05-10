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
            'app_id' => '',
            'secret' => '',
            'token' => 'weixin',
            'aes_key' => '',

            'log' => [
                'level' => 'debug',
                'file' => '/home/vagrant/log/easywechat.log,'
            ],
        ];
        parent::__construct();
    }
}
