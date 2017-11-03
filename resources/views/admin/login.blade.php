<!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>后台登录</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <link rel="stylesheet" href="{{ asset('css/amazeui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
<div class="am-g myapp-login">
    <div class="myapp-login-bg">
        <div class="myapp-login-logo">
            <i class="am-icon-stumbleupon"></i>
        </div>
        <div class="am-u-sm-10 myapp-login-form">
            <form class="am-form" name="login" method="post" action="{{ route('loginPro') }}">
                {!! csrf_field() !!}
                <fieldset>
                    <div class="am-form-group">
                        <input type="email" name="email" class="" id="doc-ipt-email-1" value="{{ old('email') }}" placeholder="登录邮箱">
                    </div>
                    <div class="am-form-group">
                        <input type="password" name="password" id="doc-ipt-pwd-1" value="" placeholder="请输入密码">
                    </div>
                    <p>
                        <button type="submit" class="am-btn am-btn-default">登录</button>
                    </p>
                    <div class="login-text">
                    </div>
                </fieldset>
            </form>
        </div>

        @if($errors->any())
            <div class="alert alert-danger" role="alert">
                @foreach($errors->getBags() as $bag)
                    @foreach($bag->all() as $item)
                        <a href="#" class="alert-link">{{ $item }}</a><br>
                    @endforeach
                @endforeach

            </div>
        @endif

    </div>
</div>
<!--[if (gte IE 9)|!(IE)]><!-->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->
<script src="{{ asset('js/amazeui.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>