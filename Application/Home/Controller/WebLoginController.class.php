<?php

namespace Home\Controller;


use Endroid\QrCode\QrCode;

class WebLoginController extends WechatBaseController
{
    public function index()
    {
        $randStr = time().'_'.uniqid();
//        M('WebLoginStr')->add(['str' => $randStr,'created_at' => time()]);
        $url = 'http://'.$_SERVER['HTTP_HOST'].U('qr').'&token='.$randStr;
        $qrCode = new QrCode($url);
        $qrCode->writeFile('./Public/img/qr/'.$randStr.".png");
    }

    public function qr()
    {

    }
}