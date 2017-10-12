<link rel="stylesheet" href="{{ asset('plugin/kefu/css/service.css') }}">
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script src="{{ asset('plugin/kefu/js/service.js') }}"></script>

<!--float-im start-->
<div class="float-im">
    <a href="http://wpa.qq.com/msgrd?v=3&uin={{ config('kefu.simple.qq.number') }}&site=qq&menu=yes" class="qq" target="_blank">
        <img src="{{ asset('plugin/kefu/img/qq1.png') }}" alt="">
        <p>{!! config('kefu.simple.qq.text') !!}</p>
    </a>
    <a href="javascript:;" class="weixin">
        <img src="{{ config('kefu.simple.weixin.qr-code') }}" alt="">
        <div class="box">
            <div class="txt">{!! config('kefu.simple.weixin.text') !!}</div>
            <img class="qr-code" src="{{ config('kefu.simple.weixin.qr-code') }}">
            <div class="sanjiao"></div>
            <div class="sanjiao-big"></div>
        </div>
    </a>
    <a href="javascript:;" class="go-top">
        <img src="{{ asset('plugin/kefu/img/totop-icon.png') }}" alt="">
    </a>
</div>
<!--float-im end-->
