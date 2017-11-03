<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" class="loading">

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
        var logined = 1
    </script>
    <title>今日句子</title>
</head>

<body>


<script>
    var now_page = 1,
        search_value = '';
</script>
<div id="menu">

    <ul>
        <li class="nav_index menu_cur"><a href="/"><i></i><span>首页</span><b></b>
                <div class="clear">
                </div>
            </a></li>
        <li class="nav_index"><a href="{{ route('passages.create') }}"><i
                        style="background-position:-7px -116px;"></i><span>发布句子</span><b></b>
                <div class="clear">
                </div>
            </a></li>
        <li class="nav_index"><a href="{{ route('labels.create') }}"><i
                        style="background-position:-7px -116px;"></i><span>发布标签</span><b></b>
                <div class="clear">
                </div>
            </a></li>
        {{--@if(Auth::check())--}}

        {{--<li class="nav_help"><a href="index.html"><i></i><span>我的句子</span><b></b>--}}
        {{--<div class="clear">--}}
        {{--</div>--}}
        {{--</a>--}}
        {{--</li>--}}


        {{--<li class="nav_site"><a href="index.html"><i></i><span>我的收藏</span><b></b>--}}
        {{--<div class="clear">--}}
        {{--</div>--}}
        {{--</a></li>--}}
        {{--<li class="nav_help"><a href="index.html"><i></i><span>我的评论</span><b></b>--}}
        {{--<div class="clear">--}}
        {{--</div>--}}
        {{--</a>--}}
        {{--</li>--}}
        {{--@endif--}}


    </ul>
</div>
<div id="user">
    @if(!Auth::check())
        <div class="account">
            <div class="login_b_t">

                <div class="pd10">
                    <div class="fl">
                        还没有账号<a id="reg_now" href="{{ route('register') }}">立即注册</a>
                    </div>
                    <div class="fr">
                        <a href="#">忘记密码?</a>
                    </div>
                    <div class="clear">
                    </div>
                </div>

            </div>
        </div>
        <div class="pd10">
            <form method="post" action="{{ route('login') }}">
                @if($errors->any())
                    <div class="alert alert-danger" style="display: none;" role="alert">
                        @if($errors->has('login'))
                            请登录
                        @else
                            账号密码错误
                        @endif
                    </div>
                @endif

                <div class="login_b_i">
                    {!! csrf_field() !!}
                    <div class="login_input">
                        <div class="login_user">
                            <input type="email" required="required" autofocus value="{{ old('email') }}" name="email"
                                   placeholder="邮箱/帐号"/><i></i>
                        </div>
                        <div class="login_password">
                            <input type="password" name="password" placeholder="密码"/><i></i>
                        </div>
                    </div>
                </div>
                <a class="login_submit">登录</a>
            </form>
            {{--<div class="login_quick">--}}
                {{--<p>--}}
                    {{--用第三方帐号直接登录--}}
                {{--</p>--}}
                {{--<a href="#" id="weibo_app"><span><i></i>微博帐号登录</span></a>--}}
                {{--<a href="#" id="qq_connect"><span><i></i>QQ&nbsp;&nbsp;帐号登录</span></a>--}}
            {{--</div>--}}
        </div>
    @else

        <div class="login_b_t center">
            <h2>{{ Auth::user()->name }} 您好！</h2>


            {{--登出--}}
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                {{ csrf_field() }}
                <div class="btn-group" role="group" aria-label="...">
                    <button type="submit" class="btn btn-default logout">退出登录</button>
                </div>
            </form>
        </div>


    @endif
</div>
<div id="header">
    <div class="wrap">
        <i class="menu_open"></i>
        <div class="logo">
            <a href="/" title="今日句子"><img src="css/logo.png"/></a>
        </div>
        <i class="search_open"></i>
    </div>
    <div class="logo_msk">
    </div>
</div>
<div id="container">
{{--    <div id="sort">
        <table width="100%" border="0" cellspacing="0">
            <tr>
                <td class="sort_left">
                    <div class="sort_cate">
                        <div class="sort_b">
                            <a href="#" onclick="return false;" style="color:#dfdfdf;">
                                <div class="sort_b_inner">
                                    <i class="cate_default"></i><span>创业艰难</span>
                                    <div class="clear">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="sort_sort">
                        <div class="sort_b">
                            <a href="#" onclick="return false;" style="color:#dfdfdf;">
                                <div class="sort_b_inner">
                                    <i class="cate_sort"></i><span>生活不易</span>
                                    <div class="clear">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </td>
                <td class="sort_right">
                    <div class="sort_tag">
                        <div class="sort_b">
                            <a href="#" onclick="return false;" style="color:#dfdfdf;">
                                <div class="sort_b_inner">
                                    <i class="cate_tag"></i><span>情真意切</span>
                                    <div class="clear">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </td>
                <td class="sort_right">
                    <div class="sort_tag">
                        <div class="sort_b">
                            <a href="#" onclick="return false;" style="color:#dfdfdf;">
                                <div class="sort_b_inner">
                                    <i class="cate_tag"></i><span>唯美短句</span>
                                    <div class="clear">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>--}}
    <div id="content">
        <div id="list">
            <ul>
                @if($passages->isEmpty())
                    <li>
                        <div class="wrap center">
                            暂无句子，赶紧发布吧
                        </div>

                    </li>
                @else

                    @foreach($passages as $passage)
                        <li>
                            <div class="wrap">
                                <a class="alist" vhref="{{ route('passages.show', ['id'=>$passage->id]) }}">
                                    <div class="list_info">
                                        <p class="book">《{{ $passage->from}}》-- {{ $passage->author }}</p>
                                        <p class="span">

                                            @if($passage->labels->isEmpty())
                                                <i style="background: #000">暂无标签</i>
                                            @else
                                                @foreach($passage->labels as $label)
                                                    <i>{{ $label->content }}</i>
                                                @endforeach
                                            @endif
                                        </p>
                                        <p class="content">
                                            {{ $passage->content }}</p>
                                    </div>
                                </a>
                            </div>
                            <div class="clear"></div>
                            <div class="buttons">
                                <span class="like iconfont">&#xe600;{{ $passage->favors_count }}</span>
                                <span class="collect iconfont">&#xe624;{{ $passage->comments_count }}</span>
                                <span class="copy iconfont">&#xe6ea;复制</span>
                            </div>
                        </li>
                    @endforeach
                @endif


            </ul>
            <!--      <div class="list_loading">
                     <i></i><span>努力加载中...</span>
                 </div> -->
        </div>
    </div>
    <div class="push_msk">
    </div>
</div>
<div id="sort_content">
    <div class="asort">
        <div class="hd">
            <div class="wrap">
                <div class="fl">
                    <span>选择分类</span>
                    <div class="clear">
                    </div>
                </div>
                <div class="fr">
                </div>
                <div class="clear">
                </div>
            </div>
        </div>
        <div class="ct">
            <div class="wrap">
                <ul class="choose_cate">
                    <li c_data="0" style="font-weight:700;"><i style="background:none;width:0;margin-right:0;"
                                                               class="s"></i><span>全部行业</span><i class="e"></i></li>
                    <li style="font-weight:700;" c_data="1" style="background:#f7f7f7;"><i
                                style="margin-right:0;background:none;width:0;" class="s"></i><span>网页</span><i
                                class="e"></i></li>
                    <li c_data="2"><i style="background:none;width:10px;margin-right:0;" class="s"></i><span>企业集团</span><i
                                class="e"></i></li>
                    <li c_data="25"><i style="background:none;width:10px;margin-right:0;"
                                       class="s"></i><span>专题/Banner</span><i class="e"></i></li>
                    <li c_data="3"><i style="background:none;width:10px;margin-right:0;" class="s"></i><span>门户电商</span><i
                                class="e"></i></li>
                    <li c_data="4"><i style="background:none;width:10px;margin-right:0;" class="s"></i><span>游戏网页</span><i
                                class="e"></i></li>
                    <li c_data="5"><i style="background:none;width:10px;margin-right:0;"
                                      class="s"></i><span>汽车/车类</span><i class="e"></i></li>
                    <li c_data="6"><i style="background:none;width:10px;margin-right:0;" class="s"></i><span>服装服饰</span><i
                                class="e"></i></li>
                    <li c_data="7"><i style="background:none;wi
                          dth:10px;margin-right:0;" class="s"></i><span>餐饮美食</span><i class="e"></i></li>
                    <li c_data="11"><i style="background:none;width:10px;margin-right:0;"
                                       class="s"></i><span>其他网页</span><i class="e"></i></li>
                    <li style="font-weight:700;" c_data="12" style="background:#f7f7f7;"><i
                                style="margin-right:0;background:none;width:0;" class="s"></i><span>GUI</span><i
                                class="e"></i></li>
                    <li c_data="13"><i style="background:none;width:10px;margin-right:0;"
                                       class="s"></i><span>图标Icon</span><i class="e"></i></li>
                    <li c_data="14"><i style="background:none;width:10px;margin-right:0;"
                                       class="s"></i><span>移动应用</span><i class="e"></i></li>
                    <li c_data="17"><i style="background:none;width:10px;margin-right:0;"
                                       class="s"></i><span>界面设计</span><i class="e"></i></li>
                    <li c_data="16"><i style="background:none;width:10px;margin-right:0;"
                                       class="s"></i><span>原型/UE</span><i class="e"></i></li>
                    <li c_data="29"><i style="background:none;width:10px;margin-right:0;"
                                       class="s"></i><span>UI动效</span><i class="e"></i></li>
                    <li c_data="18"><i style="background:none;width:10px;margin-right:0;"
                                       class="s"></i><span>其他GUI</span><i class="e"></i></li>
                    <li style="font-weight:700;" c_data="19" style="background:#f7f7f7;"><i
                                style="margin-right:0;background:none;width:0;" class="s"></i><span>平面</span><i
                                class="e"></i></li>
                    <li c_data="20"><i style="background:none;width:10px;margin-right:0;"
                                       class="s"></i><span>VI/CI</span><i class="e"></i></li>
                    <li c_data="21"><i style="background:none;width:10px;margin-right:0;"
                                       class="s"></i><span>LOGO</span><i class="e"></i></li>
                    <li c_data="22"><i style="background:none;width:10px;margin-right:0;"
                                       class="s"></i><span>字体设计</span><i class="e"></i></li>
                    <li c_data="23"><i style="background:none;width:10px;margin-right:0;"
                                       class="s"></i><span>海报设计</span><i class="e"></i></li>
                    <li c_data="30"><i style="background:none;width:10px;margin-right:0;"
                                       class="s"></i><span>图形设计</span><i class="e"></i></li>
                    <li c_data="28"><i style="background:none;width:10px;margin-right:0;"
                                       class="s"></i><span>包装设计</span><i class="e"></i></li>
                    <li c_data="24"><i style="background:none;width:10px;margin-right:0;"
                                       class="s"></i><span>其他平面</span><i class="e"></i></li>
                    <li style="font-weight:700;" c_data="34" style="background:#f7f7f7;"><i
                                style="margin-right:0;background:none;width:0;" class="s"></i><span>摄影</span><i
                                class="e"></i></li>
                    <li c_data="100"><i style="background:none;width:10px;margin-right:0;"
                                        class="s"></i><span>人像摄影</span><i class="e"></i></li>
                    <li c_data="99"><i style="background:none;width:10px;margin-right:0;"
                                       class="s"></i><span>风光摄影</span><i class="e"></i></li>
                    <li c_data="98"><i style="background:none;width:10px;margin-right:0;"
                                       class="s"></i><span>婚礼婚纱</span><i class="e"></i></li>
                    <li c_data="38"><i style="background:none;width:10px;margin-right:0;"
                                       class="s"></i><span>摄影后期</span><i class="e"></i></li>
                    <li c_data="35"><i style="background:none;width:10px;margin-right:0;"
                                       class="s"></i><span>其他摄影</span><i class="e"></i></li>
                    <li style="font-weight:700;" c_data="26" style="background:#f7f7f7;"><i
                                style="margin-right:0;background:none;width:0;" class="s"></i><span>其他</span><i
                                class="e"></i></li>
                    <li c_data="31"><i style="background:none;width:10px;margin-right:0;"
                                       class="s"></i><span>插画</span><i class="e"></i></li>
                    <li c_data="32"><i style="background:none;width:10px;margin-right:0;"
                                       class="s"></i><span>三维</span><i class="e"></i></li>
                    <li c_data="102"><i style="background:none;width:10px;margin-right:0;"
                                        class="s"></i><span>建筑设计</span><i class="e"></i></li>
                    <li c_data="27"><i style="background:none;width:10px;margin-right:0;"
                                       class="s"></i><span>其他</span><i class="e"></i></li>
                </ul>
                <div class="clear">
                </div>
            </div>
        </div>
    </div>
    <div class="asort">
        <div class="hd">
            <div class="wrap">
                <div class="fl">
                    <span>选择排序</span>
                    <div class="clear">
                    </div>
                </div>
                <div class="fr">
                </div>
                <div class="clear">
                </div>
            </div>
        </div>
        <div class="ct">
            <div class="wrap">
                <ul class="choose_sort">
                    <li class="a_selected" s_data="rec"><i class="s"></i><span>最新推荐</span><i class="e"></i></li>
                    <li s_data="like"><i class="s"></i><span>最多喜欢</span><i class="e"></i></li>
                    <li s_data="view"><i class="s"></i><span>最多浏览</span><i class="e"></i></li>
                    <li s_data="comment"><i class="s"></i><span>最多评论</span><i class="e"></i></li>
                    <li s_data="laster"><i class="s"></i><span>最新发布</span><i class="e"></i></li>
                </ul>
                <div class="clear">
                </div>
            </div>
        </div>
    </div>
    <div class="asort">
        <div class="hd">
            <div class="wrap">
                <div class="fl">
                    <i></i><span>版权</span>
                    <div class="clear">
                    </div>
                </div>
                <div class="fr">
                </div>
                <div class="clear">
                </div>
            </div>
        </div>
        <div class="ct">
            <div class="wrap">
                <!--<h4 class="cate_trade"><i></i><span>行业</span></h4>
            -->
                <ul>
                    <li t_data=""><i></i><span>所有者</span><i class="e"></i></li>
                    <li t_data="1"><i></i><span>原创</span><i class="e"></i></li>
                    <li t_data="2"><i></i><span>转载</span><i class="e"></i></li>
                </ul>
                <div class="clear">
                </div>
            </div>
        </div>
    </div>
</div>
<div id="newwrap_t" class="newwrap">
    <div class="newwrap_msk">
    </div>
    <iframe id="newwrap" frameborder="0" width="100%" height="100%">
    </iframe>
</div>

<div class="loading_dark">
</div>
<div id="loading_mask">
    <div class="loading_mask">
        <ul class="anm">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
</div>
<script language="javascript" src="{{ asset('js/zepto.min.js') }}"></script>
<script language="javascript" src="{{ asset('js/fx.js') }}"></script>
<script language="javascript" src="{{ asset('js/script.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/buttons.js') }}"></script>

@if($errors->any())
    <script type="text/javascript">

        $('.search_open').click();
        $('.alert-danger').show();
    </script>
@endif
</body>

</html>