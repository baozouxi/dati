@extends($admin_layout)


@section('title', '用户管理')

@section('body')

    <table id="users"></table>
    <script type="text/html" id="barDemo">
        @if(Request::query('is_use') == 0)
            <a class="layui-btn layui-btn-mini" lay-event="del">解冻</a>
        @else
            <a class="layui-btn layui-btn-danger layui-btn-mini" lay-event="del">冻结</a>
        @endif
    </script>

@endsection



@push('scripts')
    <script>
        layui.use('table', function () {
            var table = layui.table;

            //展示已知数据
            table.render({
                elem: '#users'
                , data: {!! $users !!}
                , cols: [[ //标题栏
                    {checkbox: true, LAY_CHECKED: false} //默认全选
                    , {field: 'id', title: 'ID', sort: true}
                    , {field: 'name', title: '用户名', width: 250}
                    , {field: 'email', title: '邮箱', width: 250}
                    , {field: 'passages_count', sort:true , title: '已发布数量', width: 150}
                    , {field: 'gender', title: '性别', width: 80}
                    , {field: 'city', title: '城市', width: 100}
                    , {field: 'experience', title: '积分', width: 80, sort: true}
                    , {fixed: 'right', width: 150, align: 'center', toolbar: '#barDemo'}
                ]]
//                , skin: 'line' //表格风格
                , even: true
                , page: true //是否显示分页
                , limits: [10, 15, 20]
                , limit: 20 //每页默认显示的数量
            });
        });
    </script>


@endpush
