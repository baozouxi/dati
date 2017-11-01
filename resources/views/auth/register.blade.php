<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=0.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
    <meta name="keywords" content=""/>
    <meta name="author" content=""/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('images/favicon.ico') }}">
    <script>
        var logined = 0
    </script>
    <title>今日句子</title>
</head>
<body>


<div id="reg_index">
    <div class="reg_bar">
        <div class="wrap">
            <span class="fl"><i></i>注册帐号</span>

            <div class="clear">
            </div>
        </div>
    </div>
    <div class="wrap reg_ct">
        <div class="pd10">
            <form method="post" action="{{ route('register') }}">
                <div class="login_b_i">
                    <div class="login_input">
                        <div class="login_user">
                            <input type="email" name="email" required="required" value="{{ old('email') }}"
                                   placeholder="邮箱（登录用）"><i></i>
                        </div>
                        {!! csrf_field() !!}
                        <div class="login_user">
                            <input type="text" name="name" required="required" value="{{ old('name') }}"
                                   placeholder="昵称"><i></i>
                        </div>


                        <div class="login_password">
                            <input type="password" name="password" required="required" placeholder="密码"><i></i>
                        </div>
                        <div class="login_password">
                            <input type="password" name=" password_confirmation" required="required" placeholder="确认密码"><i></i>
                        </div>
                    </div>
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
                <button type="submit" class="reg_submit">注册</button>
            </form>
        </div>

    </div>
</div>
</body>
</html>