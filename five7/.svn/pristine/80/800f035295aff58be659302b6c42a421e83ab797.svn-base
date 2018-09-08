@extends('layouts.default')
@section('content')

    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
        <legend>商品发布</legend>
    </fieldset>

    <div class="layui-form layui-form-pane">
        <div class="layui-form-item">
            <label class="layui-form-label">商品名</label>
            <div class="layui-input-inline">
                <input type="text" name="shopsName" lay-verify="required" placeholder="请输入" autocomplete="off"
                       class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">商品价格</label>
            <div class="layui-input-inline">
                <input type="number" name="shopsMoney" lay-verify="required" placeholder="请输入" autocomplete="off"
                       class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">商品押金</label>
            <div class="layui-input-inline">
                <input type="number" name="shopsNumber" lay-verify="required" placeholder="请输入" autocomplete="off"
                       class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">最小加价</label>
            <div class="layui-input-inline">
                <input type="number" name="minMoney" lay-verify="required" placeholder="请输入" autocomplete="off"
                       class="layui-input">
            </div>
        </div>

        <div class="layui-form-item layui-inline">
            <label class="layui-form-label">商品类型</label>
            <div class="layui-input-block">
                <select id="shopsType" name="shopsType" lay-filter="type">
                    <option value="" selected="">请选择</option>
                    <option id="miaosha" value="0">秒杀</option>
                    <option id="paimai" value="1">拍卖</option>
                </select>
            </div>
        </div>
        <div class="layui-form-item" >
            <label class="layui-form-label" >时长</label>
            <div class="layui-input-inline">
                <input type="number" name="endtime" lay-verify="required" placeholder="请输入小时数" autocomplete="off"
                       class="layui-input">
            </div>
        </div>
        <div class="layui-form-item layui-form-text">
            <label class="layui-form-label">商品描述</label>
            <div class="layui-input-block">
                <textarea placeholder="请输入内容" class="layui-textarea" name="shopsDetails"></textarea>
            </div>
        </div>
        <div class="layui-upload">
            <button type="button" class="layui-btn layui-btn-normal" id="testList">选择商品图片</button>
            <div class="layui-upload-list">
                <table class="layui-table">
                    <thead>
                    <tr>
                        <th>文件名</th>
                        <th>大小</th>
                        <th>状态</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody id="demoList"></tbody>
                </table>
            </div>
            <button type="button" class="layui-btn" id="testListAction">提交</button>
        </div>
    </div>
    {{--<script src="../lib/layui/layui.js" charset="utf-8"></script>--}}
    <!-- 注意：如果你直接复制所有代码到本地，上述js路径需要改成你本地的 -->
    <script>

        function _addEvent(obj,eventString,fun) {
            if(obj.addEventListener){
                obj.addEventListener(eventString,fun)
            }else if(obj.attachEvent){
                obj.attachEvent("on"+eventString,fun)
            }
        }


        layui.use('form', function () {
            var form = layui.form; //只有执行了这一步，部分表单元素才会自动修饰成功

            //……

            //但是，如果你的HTML是动态生成的，自动渲染就会失效
            //因此你需要在相应的地方，执行下述方法来手动渲染，跟这类似的还有 element.init();
            form.render();
        });

        layui.use('upload', function () {

            var $ = layui.jquery
                , upload = layui.upload;

            //多文件列表示例

            var demoListView = $('#demoList')
                , uploadListIns = upload.render({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data:{
                    name:function () {
                        return $('input[name="shopsName"]').val()
                    },
                    money:function () {
                        return $('input[name="shopsMoney"]').val()
                    },
                    type:function () {
                        return $('#shopsType option:selected').val()
                    },
                    number:function () {
                        return $('input[name="shopsNumber"]').val()
                    },
                    details:function () {
                        return $('textarea[name="shopsDetails"]').val()
                    },
                    minMoney:function () {
                        return $('input[name="minMoney"]').val()
                    },
                    endtime:function () {
                        return $('input[name="endtime"]').val()
                    }
                },
                elem: '#testList'
                , url: '{{route('CommodityRelease')}}'
                , accept: 'file'
                , multiple: true
                , auto: false
                    , bindAction: '#testListAction'
                , choose: function (obj) {
                    var files = this.files = obj.pushFile(); //将每次选择的文件追加到文件队列
                    //读取本地文件
                    obj.preview(function (index, file, result) {
                        var tr = $(['<tr id="upload-' + index + '">'
                            , '<td>' + file.name + '</td>'
                            , '<td>' + (file.size / 1014).toFixed(1) + 'kb</td>'
                            , '<td>等待上传</td>'
                            , '<td>'
                            , '<button class="layui-btn layui-btn-mini demo-reload layui-hide">重传</button>'
                            , '<button class="layui-btn layui-btn-mini layui-btn-danger demo-delete">删除</button>'
                            , '</td>'
                            , '</tr>'].join(''));

                        //单个重传
                        tr.find('.demo-reload').on('click', function () {
                            obj.upload(index, file);
                        });

                        //删除
                        tr.find('.demo-delete').on('click', function () {
                            delete files[index]; //删除对应的文件
                            tr.remove();
                            uploadListIns.config.elem.next()[0].value = ''; //清空 input file 值，以免删除后出现同名文件不可选
                        });

                        demoListView.append(tr);
                    });
                }
                , done: function (res, index, upload) {
                    if (res.code == 0) { //上传成功
                        var tr = demoListView.find('tr#upload-' + index)
                            , tds = tr.children();
                        tds.eq(2).html('<span style="color: #5FB878;">上传成功</span>');
                        tds.eq(3).html(''); //清空操作
                        layer.alert(res.msg, {icon: 6},function () {
                            location.reload();
                        });
                        return delete this.files[index]; //删除文件队列已经上传成功的文件
                    }else {
                        layer.alert(res.msg, {icon: 6});
                    }
                    this.error(index, upload);
                }
                , error: function (index, upload) {
                    var tr = demoListView.find('tr#upload-' + index)
                        , tds = tr.children();
                    tds.eq(2).html('<span style="color: #FF5722;">上传失败</span>');
                    tds.eq(3).find('.demo-reload').removeClass('layui-hide'); //显示重传
                }
            });


        });


    </script>

@endsection