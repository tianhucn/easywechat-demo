<?php
return array(
	//'配置项'=>'配置值'
    'URL_MODEL' => 0,

    'EASY_WECHAT' => [
        'debug' => true,
        'app_id' => 'wx89547bd8268461dd',
        'secret' => '7fe943d66f24ce0e0d7c152928383826',
        'token' => 'weixin',
        'aes_key' => null,

        'log' => [
            'level' => 'debug',
            'file' => '/home/vagrant/Code/aa/Application/Runtime/Logs/easywechat.log',
        ],

        'oauth' => [
            'scopes' => ['snsapi_userinfo'],
            'callback' => '',
        ],
    ],

    'DB_TYPE' => 'mysqli',
    'DB_HOST' => '127.0.0.1',
    'DB_NAME' => 'homestead',
    'DB_USER' => 'homestead',
    'DB_PWD' => 'secret',
    'DB_PORT' => 3306,
    'DB_PREFIX' => '',
);