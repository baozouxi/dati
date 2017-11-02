<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=0.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
    <title>发布句子</title>
</head>

<body>
<div id="header" class="head">
    <div class="wrap">
        <i class="menu_back"><a href="/"></a></i>
        <div class="title">
            <span class="title_d"><p>发布句子</p></span>
            <div class="clear"></div>
        </div>
    </div>
</div>
<div id="form">

    {{--@if($errors->any())--}}
    {{--{{dd($errors)}}--}}
    {{--@endif--}}
    <form method="post" action="{{ route('passages.store') }}">
        {!!  csrf_field() !!}
        <div class="form-group">
            <label for="exampleInputEmail1">出处：</label>
            <input type="text" required="required" name="from" class="form-control" id="exampleInputEmail1"
                   placeholder="句子的出处">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">作者：</label>
            <input type="text" required="required" name="author" class="form-control" id="exampleInputPassword1"
                   placeholder="句子的原作者">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">金句：</label>
            <textarea class="form-control" required="required" name="content" rows="3"
                      placeholder="请在这里输入您喜欢的句子，请勿发无意义的灌水文字"></textarea>
        </div>

        <div class="form-group line_span">
            @if($labels->isEmpty())
                <span class="disabled">暂无标签</span>
            @else
                @foreach($labels as $label)
                    <span>{{ $label->content }}</span>
                @endforeach
            @endif
        </div>

        <button type="submit" class="btn btn-default submit_right">发布</button>
    </form>
</div>
</body>

</html>