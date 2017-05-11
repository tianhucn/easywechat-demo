<?php
namespace Home\Controller;

use Think\Controller;

class WechatBaseController extends Controller
{
    protected $options;

    public function __construct()
    {
        $this->options = C('EASY_WECHAT');
        parent::__construct();
    }
}
