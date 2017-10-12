<link rel="stylesheet" href="{{ asset('plugin/kefu/css/service.css') }}">
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script src="{{ asset('plugin/kefu/js/service.js') }}"></script>

<!-- 代码部分 begin -->
<div class="main-im">
    <div id="open_im" class="open-im">&nbsp;</div>
    <div class="im_main" id="im_main">
        <div id="close_im" class="close-im"><a href="javascript:void(0);" title="点击关闭">&nbsp;</a></div>
        <a href="http://wpa.qq.com/msgrd?v=3&uin={{ config('kefu.simple.qq.number') }}&site=qq&menu=yes" target="_blank" class="im-qq qq-a" title="在线QQ客服">
            <div class="qq-container"></div>
            <div class="qq-hover-c"><img class="img-qq" src="{{ asset('plugin/kefu/img/qq.png') }}"></div>
            <span>{!! config('kefu.default.qq.text') !!}</span>
        </a>
        <div class="im-tel">
            <div>{!! config('kefu.default.tel.text1') !!}</div>
            <div class="tel-num">{{ config('kefu.default.tel.number1') }}</div>
            <div>{!! config('kefu.default.tel.text2') !!}</div>
            <div class="tel-num">{{ config('kefu.default.tel.number2') }}</div>
        </div>
        <div class="im-footer" style="position:relative">
            <div class="weixin-container">
                <div class="weixin-show">
                    <div class="weixin-txt">{!! config('kefu.default.weixin.text') !!}</div>
                    <img class="weixin-ma" src="{{ config('kefu.default.weixin.qr-code') }}">
                    <div class="weixin-sanjiao"></div>
                    <div class="weixin-sanjiao-big"></div>
                </div>
            </div>
            <div class="go-top"><a href="javascript:;" title="返回顶部"></a> </div>
            <div style="clear:both"></div>
        </div>
    </div>
</div>
<!-- 代码部分 end-->