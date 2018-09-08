@extends('layouts.default')
@section('content')

    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
        <legend>编辑已发布的商品</legend>
    </fieldset>


    <div class="layui-form layui-form-pane" id="content">
        <div class="layui-form-item">
            <label class="layui-form-label">商品名</label>
            <div class="layui-input-inline">
                <input type="text" name="shopsName" lay-verify="required" placeholder="请输入" autocomplete="off"
                       class="layui-input" v-model="name" v-cloak>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">商品价格</label>
            <div class="layui-input-inline">
                <input type="number" name="shopsMoney" lay-verify="required" placeholder="请输入" autocomplete="off"
                       class="layui-input" v-model="money" v-cloak>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">商品押金</label>
            <div class="layui-input-inline">
                <input type="number" name="shopsNumber" lay-verify="required" placeholder="请输入" autocomplete="off"
                       class="layui-input" v-model="deposit" v-cloak>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">最小加价</label>
            <div class="layui-input-inline">
                <input type="number" name="minMoney" lay-verify="required" placeholder="请输入" autocomplete="off"
                       class="layui-input" v-model="minmoney" v-cloak>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">时长</label>
            <div class="layui-input-inline">
                <input type="number" name="endtime" lay-verify="required" placeholder="请输入小时数" autocomplete="off"
                       class="layui-input" v-model="endtime" v-cloak>
            </div>
        </div>


        <div class="layui-form-item layui-form-text">
            <label class="layui-form-label">商品描述</label>
            <div class="layui-input-block">
                <textarea placeholder="请输入内容" class="layui-textarea" name="shopsDetails" v-model="details"
                          v-cloak></textarea>
            </div>
        </div>
        <button type="button" class="layui-btn" id="testListAction">提交</button>
    </div>
    {{--<script src="../lib/layui/layui.js" charset="utf-8"></script>--}}
    <!-- 注意：如果你直接复制所有代码到本地，上述js路径需要改成你本地的 -->
    <script>
        var originalData = new Vue({
            el: '#content',
            data: {
                name: '',
                money: '',
                details: '',
                deposit: '',
                minmoney: '',
                endtime:''
            }

        })

        var shopId = '{{$id}}'
        var reg = /^[0-9]*$/;

        $(function () {

            $.ajax({
                headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},
                type: 'post',
                url: '{{route("getOriginalData")}}',
                data: {
                    shop_id: shopId,
                }, success: function (data) {
                    // console.log(data.data[0]['type']);
                    var startTime=data.data[0]['starttime']
                    var endTime=data.data[0]['endtime'];
                    endTime=parseInt((endTime-startTime)/3600)
                    originalData.name = data.data[0]['name']
                    originalData.money = data.data[0]['money']
                    originalData.details = data.data[0]['details']
                    originalData.deposit = data.data[0]['deposit']
                    originalData.minmoney = data.data[0]['minmoney']
                    originalData.endtime =  endTime
                }, error: function (data) {
                    layer.alert('数据请求异常\n'+data)
                }
            })



            $("#testListAction").click(function () {

                if ($('input[name="shopsName"]').val() == '') {
                    layer.alert('商品名不能为空')
                } else if ($('input[name="shopsMoney"]').val() == '' || !reg.test($('input[name="shopsMoney"]').val())) {
                    layer.alert('商品价格输入有误')
                } else if ($('#shopsType option:selected').val() == '') {
                    layer.alert('请选择商品类型')
                } else if ($('input[name="shopsNumber"]').val() == '' || !reg.test($('input[name="shopsNumber"]').val())) {
                    layer.alert('商品数押金输入有误')
                } else if ($('textarea[name="shopsDetails"]').val() == '') {
                    layer.alert('商品详情不能为空')
                } else {
                    $.ajax({
                        headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},
                        type:'post',
                        url:'{{route("updata")}}',
                        data:{
                            shopid:shopId,
                            method:'put',
                            name:$('input[name="shopsName"]').val(),
                            money:$('input[name="shopsMoney"]').val(),
                            details:$('textarea[name="shopsDetails"]').val(),
                            minmoney:$('input[name="minMoney"]').val(),
                            deposit:$('input[name="shopsNumber"]').val(),
                            endtime:$('input[name="endtime"]').val(),

                        },success:function (data) {
                            if(data==1){
                                layer.msg('提交成功',{
                                    time:2000
                                });
                                setTimeout(function () {
                                    window.location.href='{{route("CommodityDetails")}}'

                                },2000)
                            }else{
                                layer.alert('保存异常')
                            }
                        },error:function (data) {
                            layer.msg('数据请求异常\n'+data)

                        }

                    })
                }
            })
            //
            // _addEvent(btn, 'click', function () {
            //     if ($('input[name="shopsName"]').val() == '') {
            //         layer.alert('商品名不能为空')
            //     } else if ($('input[name="shopsMoney"]').val() == '' || !reg.test($('input[name="shopsMoney"]').val())) {
            //         layer.alert('商品价格输入有误')
            //
            //     } else if ($('#shopsType option:selected').val() == '') {
            //         layer.alert('请选择商品类型')
            //
            //     } else if ($('input[name="shopsNumber"]').val() == '' || !reg.test($('input[name="shopsNumber"]').val())) {
            //         layer.alert('商品数押金输入有误')
            //
            //     } else if ($('textarea[name="shopsDetails"]').val() == '') {
            //         layer.alert('商品详情不能为空')
            //
            //     } else if ($('input[name="minMoney"]').val() == '' || !reg.test($('input[name="minMoney"]').val())) {
            //         layer.alert('每次最小加价输入有误')
            //     }
            // })
        })

        function _addEvent(obj, eventString, fun) {
            if (obj.addEventListener) {
                obj.addEventListener(eventString, fun)
            } else if (obj.attachEvent) {
                obj.attachEvent("on" + eventString, fun)
            }
        }


        layui.use('form', function () {
            var form = layui.form; //只有执行了这一步，部分表单元素才会自动修饰成功

            //……

            //但是，如果你的HTML是动态生成的，自动渲染就会失效
            //因此你需要在相应的地方，执行下述方法来手动渲染，跟这类似的还有 element.init();
            form.render();
        });


    </script>

@endsection