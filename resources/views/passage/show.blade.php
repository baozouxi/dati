<!DOCTYPE html>
<html class="loading">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport"
          content="width=device-width, initial-scale=0.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}"/>
    <link href="https://cdn.bootcss.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet">
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
                        <dd>{{ $passage->comments->count() }}</dd>
                        <div class="clear"></div>
                    </dl>
                    <dl class="list_info_like">
                        <dt></dt>
                        <dd>{{ $passage->favors->count() }}</dd>
                        <div class="clear"></div>
                    </dl>
                    <dl class="works_view">
                        <dt></dt>
                        <dd>{{ $passage->created_at->diffForHumans() }}</dd>
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
                <h4>全部评论: {{ $passage->comments->count() }}条</h4>
            </div>
            <ul>
                @foreach($passage->comments as $comment)
                <li postdata="17470" usdata="20035">
                    <div class="pd5">
                        <a class="avt fl" target="_blank" href="#"><img
                                    src="http://qzapp.qlogo.cn/qzapp/100516179/5AD4BF326DD5B4D6E12FD08F60EDDBB0/100"/></a>
                        <div class="comment_content">
                            <h5>
                                <div class="fl"><a class="comment_name" href="#">{{ $comment->user->name }}</a><span>{{ $comment->created_at->diffForHumans() }}</span></div>
                                {{--<div class="fr reply_this">[回复]</div>--}}
                                <div class="clear"></div>
                            </h5>
                            <div class="comment_p">
                                <div class="comment_pct">{{ $comment->content }}</div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="comment_reply"></div>
                    </div>
                </li>

                @endforeach
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
            <td class="us_panel_like {{ $liked ? 'liked' : '' }}">
                <i></i><span>喜欢(<em>{{ $passage->favors()->count() }}</em>)</span></td>
            <td class="us_panel_menu">
                <div class="arrow_top"></div>
                <i></i>
                <div class="us_panel_menu_left"></div>
                <div class="us_panel_menu_right"></div>
            </td>
            <td class="us_panel_post"><i></i><span>评论(<em>5</em>)</span></td>
        </tr>
    </table>
</div>
<div id="add_newpost">
    <form action="{{ route('commentStore', ['id'=>$passage->id]) }}" method="post">
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
                {!! csrf_field() !!}
                <div class="newpost_w_t">
                    <textarea name="content" required="required">{{ old('content') }}</textarea>
                </div>
            </div>
        </div>
        @if($errors->has('content'))
            <div class="newpost_w">
                <div class="pd10">
                    <div class="alert alert-danger" role="alert">{{ $errors->first('content') }}</div>
                </div>
            </div>
        @endif

    </form>


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
                    <input type="text" placeholder="创建分类"/>
                </div>
                <div class="clear"></div>
            </div>
            <ul id="add_favorites_choose">
            </ul>
        </div>
    </div>
</div>


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
<script>


    @if($errors->has('content'))
        $('.us_panel_post').trigger('click');
    @endif




</script>
</body>

</html>