<?php

namespace Chenhua\OnlineKefu;

class OnlineKefu
{

    public function __construct()
    {

    }

    //显示客服内容
    public function show($style = 'default')
    {
        $content = require_once(__DIR__.'/views/'.$style.'.php');
        dd($content);
    }
}