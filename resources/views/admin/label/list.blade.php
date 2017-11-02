@extends($admin_layout)


@section('title', '标签管理')

@section('body')
    <table id="passages" lay-filter="test"></table>
    <script type="text/html" id="barDemo">
        @if(Request::query('checked') == '0')
        <a class="layui-btn layui-btn-mini" lay-event="check">过审</a>
        @else
        <a class="layui-btn layui-btn-danger layui-btn-mini" lay-event="del">删除</a>
        @endif
    </script>
@endsection




@push('scripts')
    <script>
        layui.use('table', function () {
            var table = layui.table;

            //展示已知数据
            table.render({
                elem: '#passages'
                , data: {!! $labels !!}
                , cols: [[ //标题栏
                    {checkbox: true, LAY_CHECKED: false} //默认全选
                    , {field: 'id', title: 'ID', sort: true}
                    , {field: 'content', title: '内容', width: 800}
                    , {field: 'author', sort: true, title: '作者', width: 150}
                    , {field: 'created_at', sort: true, title: '发布时间', width: 150}
                    , {fixed: 'right', width: 150, align: 'center', toolbar: '#barDemo'}
                ]]
//                , skin: 'line' //表格风格
                , even: true
                , page: true //是否显示分页
                , limits: [10, 15, 20]
                , limit: 20 //每页默认显示的数量
            });


            //工具条事件处理
            table.on('tool(test)', function (obj) { //注：tool是工具条事件名，test是table原始容器的属性 lay-filter="对应的值"
                var data = obj.data; //获得当前行数据
                var layEvent = obj.event; //获得 lay-event 对应的值
                var tr = obj.tr; //获得当前行 tr 的DOM对象

                if (layEvent === 'check') { //

                    data._method = "PUT";
                    data.checked = '1';
                    $.post('/labels/' + data.id+'/check', null, null, 'json').done(function (data) {

                        if (data.status == 'ok') {
                            obj.del(); //删除对应行（tr）的DOM结构，并更新缓存
                            return;
                        }

                        alert('过审失败，请稍后重试');

                    }).fail();
                    //do somehing
                } else if (layEvent === 'del') { //删除

                    layer.confirm('确定删除该条标签吗？', function (index) {
                        data._method = 'DELETE';
                        $.post('/admin/labels/' + data.id, data, null, 'json').done(function (data) {
                            if (data.status == 'ok') {
                                obj.del(); //删除对应行（tr）的DOM结构，并更新缓存
                                layer.close(index);
                                return;
                            }
                            alert(data.status);

                        }).fail(function (xhr) {
                            alert(xhr.status);
                        });

                        //向服务端发送删除指令
                    });
                }
            });


        });
    </script>
@endpush