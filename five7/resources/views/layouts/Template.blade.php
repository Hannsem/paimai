<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Five7</title>
    <link href="{{URL::asset('layui/css/layui.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/tempstyle.css')}}" rel="stylesheet">
    <script src="{{URL::asset('layui/layui.js')}}"></script>
    <script src="{{URL::asset('js/jquery.js')}}"></script>
    <script src="{{URL::asset('js/vue.js')}}"></script>
    <script src="{{URL::asset('js/temp.js')}}"></script>
</head>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">

    {{--头部--}}
    @yield('head')
    <div class="layui-header">
        <div class="layui-logo" style="color: #fff"><img src="" >Five 7</div>
        <!-- 头部区域（可配合layui已有的水平导航） -->
        <ul class="layui-nav layui-layout-left">

        </ul>
        <ul class="layui-nav layui-layout-right">
            <li class="layui-nav-item">
                <a href="javascript:;">
                    <img src="https://ss0.bdstatic.com/94oJfD_bAAcT8t7mm9GUKT-xh_/timg?image&quality=100&size=b4000_4000&sec=153362852&di=1a45c27d6bd1f6a414a774676b2ea4b3&src=http://img.mp.itc.cn/upload/20170428/fe26ffbe5a1a4845b0c25e3839bbf98d_th.jpeg" class="layui-nav-img">
                </a>
                <dl class="layui-nav-child">
                    <dd><a href="">安全设置</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item clean"><a href="javascript:;">注销</a></li>
        </ul>
    </div>
    @show
    {{--左边导航--}}
    @yield('left')
    <div class="layui-side layui-bg-black">
        <!-- Contenedor -->
        <ul id="accordion" class="accordion">
            <li>
                <div class="link"><i class="fa fa-paint-brush"></i>商品发布<i class="fa fa-chevron-down"></i></div>
                <ul class="submenu">
                    <li><a href="#">test</a></li>
                </ul>
            </li>
            <li>
                <div class="link"><i class="fa fa-code"></i>拍卖<i class="fa fa-chevron-down"></i></div>
                <ul class="submenu">
                    <li><a href="#">test</a></li>
                </ul>
            </li>
            <li>
                <div class="link"><i class="fa fa-mobile"></i>秒杀<i class="fa fa-chevron-down"></i></div>
                <ul class="submenu">
                    <li><a href="#">test</a></li>
                </ul>
            </li>
            <li><div class="link"><i class="fa fa-globe"></i> 网站管理<i class="fa fa-chevron-down"></i></div>
                <ul class="submenu">
                    <li><a href="#">test</a></li>
                </ul>
            </li>
        </ul>
    </div>
    @show
    {{--中间--}}

    <div class="layui-body" style="padding: 5px;">
        <!-- 内容主体区域 -->
        @yield('content')
        {{--<div>--}}
        {{--<iframe id="iframe" src="{{route('adminLogin')}}" scrolling="yes" name="aa" frameborder="0" width="100%" height=""></iframe>--}}
        {{--</div>--}}
        @show
    </div>

    {{--脚部--}}
    @yield('footer')
    <div class="layui-footer">
        <!-- 底部固定区域 -->
        © Five7 - 底部广告区域。
    </div>

    @show

</div>

<script>
    layui.use('element', function(){
        var element = layui.element;
    });
</script>
</body>
</html>