<?php
return [
    'default' => [
        'qq'     => [
            'number' => '276004561',  //qq号码
            'text'   => '在线客服'  //说明文字
        ],
        'tel'    => [  //可自由编辑内容
            'text1' => '售前咨询热线',
            'number1'  => '150-9087-8950',
            'text2' => '售后咨询热线',
            'number2'  => '138-6131-2481',
        ],
        'weixin' => [
            'qr-code' => PHP_SAPI === 'cli' ? false : url('plugin/kefu/img/weixin-ma.jpg'),  //可修改为外网地址
            'text' => '微信扫一扫<br>咨询微信客服'
        ]
    ],
    'simple'  => [
        'qq'     => [
            'number' => '276004561',  //qq号码
            'text'   => '在线客服'  //说明文字
        ],
        'weixin' => [
            'qr-code' => PHP_SAPI === 'cli' ? false : url('plugin/kefu/img/weixin-ma.jpg'),  //可修改为外网地址
            'text' => '微信扫一扫<br>咨询微信客服'
        ]
    ],
];