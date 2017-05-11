<?php

namespace Home\Controller;


use Home\Lib\MysqlCacheDriver;

class TestController
{
    public function index()
    {
        C('SHOW_PAGE_TRACE',1);
        $cache = new MysqlCacheDriver();
        var_dump($cache->fetch(''));
    }
}