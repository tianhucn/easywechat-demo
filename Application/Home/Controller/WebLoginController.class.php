<?php

namespace Home\Controller;


use EasyWeChat\Foundation\Application;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

class WebLoginController extends WechatBaseController
{
    public function index()
    {
        $app = new Application($this->options);

        $url = $app->url;

        $randStr = time().'_'.uniqid();
        M('WebLoginStr')->add(['str' => $randStr,'session_id' => session_id(),'created_at' => time()]);
        $initiallyUrl = 'http://'.$_SERVER['HTTP_HOST'].U('mobile').'&token='.$randStr;
        $shortUrl = $url->shorten($initiallyUrl);
        $url = $shortUrl['short_url'];
        $this->assign(compact('url','randStr'));
        $this->display();
    }

    public function qr($url)
    {
        $qrCode = new QrCode($url);
        $qrCode->setMargin(10)->setEncoding('UTF-8')->setErrorCorrectionLevel(ErrorCorrectionLevel::HIGH);
        header('Content-Type: '.$qrCode->getContentType(PngWriter::class));
        echo $qrCode->writeString(PngWriter::class);
    }

    public function mobile($token)
    {
        var_dump('xx');
    }

    public function checkLogin($token)
    {
        $check = M('WebLoginStr')->where(['str'=>$token,'session_id'=>session_id(),'is_confirm'=>0])->find();
        header('Content-type: application/json;charset=utf-8');
        echo $check['is_confirm'];
    }
}