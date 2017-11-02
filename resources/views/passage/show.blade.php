<!DOCTYPE html>
<html class="loading">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=0.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <link rel="apple-touch-icon-precomposed" href="http://www.17sucai.com/static/images/favicon.ico">
    <script>
        var logined = {{ Auth::check() ? 1 : 0 }};
        var passId = {{ $passage->id }};
    </script>
    <title>句子详情</title>
</head>

<body>
<div id="menu">

{{--    <ul>
        <li class="nav_index"><a href="index.html"><i></i><span>首页</span><b></b><div class="clear"></div></a></li>
        <li class="nav_site"><a href="index.html"><i></i><span>设计师</span><b></b><div class="clear"></div></a></li>
        <li class="nav_help"><a href="index.html"><i></i><span>帮帮忙</span><b></b><div class="clear"></div></a></li>
        <li class="nav_about"><a href="index.html"><i></i><span>关于我们</span><b></b><div class="clear"></div></a></li>
    </ul>--}}
</div>

<div id="header" class="head">
    <div class="wrap">
        <i class="menu_back"><a href="/"></a></i>
        <div class="title">
            <span class="title_d"><p>{{ $passage->from }}</p></span>
            <div class="clear"></div>
        </div>
        {{--<i class="menu_share"></i>--}}
    </div>
</div>
<div id="container">
    <div id="content">
        <div style="height:1px"></div>
        <div id="works">
            <div class="pd5">
                <div class="list_info_i" style="margin-top:5px;">
                    <dl class="list_info_views">
                        <dt></dt>
                        <dd>7416</dd>
                        <div class="clear"></div>
                    </dl>
                    <dl class="list_info_comment">
                        <dt></dt>
                        <dd>5</dd>
                        <div class="clear"></div>
                    </dl>
                    <dl class="list_info_like">
                        <dt></dt>
                        <dd>8</dd>
                        <div class="clear"></div>
                    </dl>
                    <dl class="works_view">
                        <dt></dt>
                        <dd>8天前</dd>
                        <div class="clear"></div>
                    </dl>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
                <div class="article_ct">
                    <p>{{ $passage->content }}</p>
                <!-- <p>
						<img src="{{ asset('images/1421906192522_1140x0.jpg') }}" /></p> -->
                </div>
                <div class="clear"></div>
            </div>
        </div>

        <div id="comment">
            <div class="comment_other">
                <h4>全部评论: 5条</h4>
            </div>
            <ul>
                <li postdata="17470" usdata="20035">
                    <div class="pd5">
                        <a class="avt fl" target="_blank" href="#"><img src="http://qzapp.qlogo.cn/qzapp/100516179/5AD4BF326DD5B4D6E12FD08F60EDDBB0/100" /></a>
                        <div class="comment_content">
                            <h5>
                                <div class="fl"><a class="comment_name" href="#">爱玩</a><span>2天前</span></div>
                                <div class="fr reply_this">[回复]</div>
                                <div class="clear"></div>
                            </h5>
                            <div class="comment_p">
                                <div class="comment_pct">太赞了</div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="comment_reply"></div>
                    </div>
                </li>
                <li postdata="17468" usdata="20035">
                    <div class="pd5">
                        <a class="avt fl" target="_blank" href="#"><img src="http://qzapp.qlogo.cn/qzapp/100516179/5AD4BF326DD5B4D6E12FD08F60EDDBB0/100" /></a>
                        <div class="comment_content">
                            <h5>
                                <div class="fl"><a class="comment_name" href="#">爱玩</a><span>2天前</span></div>
                                <div class="fr reply_this">[回复]</div>
                                <div class="clear"></div>
                            </h5>
                            <div class="comment_p">
                                <div class="comment_pct">顶顶顶顶顶多大</div>
                                <div class="quote">
                                    <div class="pd10">看看看看</div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="comment_reply"></div>
                    </div>
                </li>
                <li postdata="17467" usdata="20035">
                    <div class="pd5">
                        <a class="avt fl" target="_blank" href="#"><img src="http://qzapp.qlogo.cn/qzapp/100516179/5AD4BF326DD5B4D6E12FD08F60EDDBB0/100" /></a>
                        <div class="comment_content">
                            <h5>
                                <div class="fl"><a class="comment_name" href="#">爱玩</a><span>2天前</span></div>
                                <div class="fr reply_this">[回复]</div>
                                <div class="clear"></div>
                            </h5>
                            <div class="comment_p">
                                <div class="comment_pct">看看看看</div>
                                <div class="quote">
                                    <div class="pd10">dsafdafds</div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="comment_reply"></div>
                    </div>
                </li>
                <li postdata="17305" usdata="1959">
                    <div class="pd5">
                        <a class="avt fl" target="_blank" href="#"><img src="http://qzapp.qlogo.cn/qzapp/100516179/21B6575BFBCD8F0604A84A5225EE1145/100" /></a>
                        <div class="comment_content">
                            <h5>
                                <div class="fl"><a class="comment_name" href="#">亻夫</a><span>6天前</span></div>
                                <div class="fr reply_this">[回复]</div>
                                <div class="clear"></div>
                            </h5>
                            <div class="comment_p">
                                <div class="comment_pct">dsafdafds</div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="comment_reply"></div>
                    </div>
                </li>
                <li postdata="17263" usdata="3984">
                    <div class="pd5">
                        <a class="avt fl" target="_blank" href="#"><img src="http://tp1.sinaimg.cn/1860596552/180/40037759629/1" /></a>
                        <div class="comment_content">
                            <h5>
                                <div class="fl"><a class="comment_name" href="#">wenrou</a><span>7天前</span></div>
                                <div class="fr reply_this">[回复]</div>
                                <div class="clear"></div>
                            </h5>
                            <div class="comment_p">
                                <div class="comment_pct">能不能直接拖动换排序···人性化点！</div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="comment_reply"></div>
                    </div>
                </li>
            </ul>
            <div class="pd5">
            </div>
        </div>
    </div>
</div>
<div id="us_panel_menu">
    <div class="us_panel_msk"></div>
    <div class="us_panel_menu_t">
        <table width="100%" cellspacing="0">
            <tr>
                <td valign="top" class="us_panel_menu_index">
                    <a href="#"><i></i><span>首页</span></a>
                </td>
                <td valign="top" class="us_panel_menu_designer">
                    <a href="#"><i></i><span>设计师</span></a>
                </td>
                <td valign="top" class="us_panel_menu_help">
                    <a href="#"><i></i><span>帮帮忙</span></a>
                </td>
                <td valign="top" class="us_panel_menu_about">
                    <a href="#"><i></i><span>关于</span></a>
                </td>
            </tr>
        </table>
    </div>
</div>
<div id="us_panel2">
    <table width="100%" height="100%" cellspacing="0" border="0">
        <tr>
            <td class="us_panel_like {{ $liked ? 'liked' : '' }}"><i></i><span>喜欢(<em>{{ $passage->favors()->count() }}</em>)</span></td>
            <td class="us_panel_menu">
                <div class="arrow_top"></div><i></i>
                <div class="us_panel_menu_left"></div>
                <div class="us_panel_menu_right"></div>
            </td>
            <td class="us_panel_post"><i></i><span>评论(<em>5</em>)</span></td>
        </tr>
    </table>
</div>
<div id="add_newpost">
    <div class="add_newpost">
        <table width="100%" height="100%" cellspacing="5">
            <tr>
                <td class="add_newpost_cancel">取消</td>
                <td class="add_newpost_post">评论</td>
            </tr>
        </table>
    </div>
    <div class="newpost_w">
        <div class="pd10">
            <form action="{{ route('comments.store') }}" method="post">
                {!! csrf_field() !!}
            <div class="newpost_w_t">
                <textarea name="content"></textarea>
            </div>
            </form>
        </div>
    </div>
</div>
<div id="add_favorite">
    <div class="hd">
        <div class="wrap">
            <div class="fl">
                <span>喜欢的分类</span>
            </div>
            <div class="fr"></div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="ct">
        <div class="wrap">
            <div class="created_cate">
                <div class="created_cate_add">添加</div>
                <div class="created_cate_ipt">
                    <input type="text" placeholder="创建分类" />
                </div>
                <div class="clear"></div>
            </div>
            <ul id="add_favorites_choose">
            </ul>
        </div>
    </div>
</div>
{{--<div id="share">--}}
    {{--<div class="share_msk"></div>--}}
    {{--<div class="share">--}}
        {{--<table width="100%" cellspacing="10" border="0">--}}
            {{--<tr>--}}
                {{--<td class="sina"><a href="http://service.weibo.com/share/share.php?url=http://www.ke01.com/post/3377/&title=%E7%AE%80%E6%B4%81%E7%BD%91%E9%A1%B5%E5%8D%95%E9%A1%B5(%E5%90%ABPSD%E6%96%87%E4%BB%B6)&pic=http://cdn.ke01.com/201401/1389608264889.jpg&appkey=3206975293" target="_blank"></a></td>--}}
                {{--<td class="guangbo"><a href="http://share.v.t.qq.com/index.php?c=share&a=index&url=http://www.ke01.com/post/3377/&title=%E7%AE%80%E6%B4%81%E7%BD%91%E9%A1%B5%E5%8D%95%E9%A1%B5(%E5%90%ABPSD%E6%96%87%E4%BB%B6)&pic=http://cdn.ke01.com/201401/1389608264889.jpg&appkey=3206975293" target="_blank"></a></td>--}}
                {{--<td class="facebook"><a target="_blank" href="http://www.facebook.com/sharer.php?u=http://www.ke01.com/post/3377/&t=%E7%AE%80%E6%B4%81%E7%BD%91%E9%A1%B5%E5%8D%95%E9%A1%B5(%E5%90%ABPSD%E6%96%87%E4%BB%B6)&images=http://cdn.ke01.com/201401/1389608264889.jpg"></a></td>--}}
                {{--<td class="twitter"><a target="_blank" href="http://twitter.com/share?text=%E7%AE%80%E6%B4%81%E7%BD%91%E9%A1%B5%E5%8D%95%E9%A1%B5(%E5%90%ABPSD%E6%96%87%E4%BB%B6)&url=http://www.ke01.com/post/3377/&pic=http://cdn.ke01.com/201401/1389608264889.jpg"></a></td>--}}
            {{--</tr>--}}
        {{--</table>--}}
        {{--<div class="pd10">--}}
            {{--<div class="cancel_share"><a href="" onclick="return false;">取消分享</a></div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}


<div class="loading_dark"></div>
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
<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
<script language="javascript" src="{{ asset('js/zepto.min.js') }}"></script>
<script language="javascript" src="{{ asset('js/fx.js') }}"></script>
<script language="javascript" src="{{ asset('js/show.js') }}"></script>
<script language="javascript" src="{{ asset('js/script.js') }}"></script>
</body>

</html>