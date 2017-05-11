<?php
namespace Home\Controller;

use Think\Controller;

class WechatBaseController extends Controller
{
    protected $options;

    public function __construct()
    {
        require_once './vendor/autoload.php';
        $this->options = C('EASY_WECHAT');
        parent::__construct();
    }
}
